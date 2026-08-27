<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Admin Login</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            font-family: Arial, sans-serif;

            background: #080b12;
            color: white;
        }

        .card {
            width: 90%;
            max-width: 400px;

            padding: 35px;

            background: #111722;

            border: 1px solid #252d3a;

            border-radius: 16px;

            box-shadow: 0 20px 60px rgba(0,0,0,.5);
        }

        h1 {
            margin: 0 0 8px;
        }

        p {
            color: #7f8998;
            font-size: 14px;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;

            font-size: 13px;
        }

        input {
            width: 100%;

            padding: 13px;

            border: 1px solid #303947;

            border-radius: 8px;

            outline: none;

            background: #080c13;
            color: white;

            font-size: 14px;
        }

        input:focus {
            border-color: #ffc107;
        }

        button {
            width: 100%;

            margin-top: 18px;

            padding: 13px;

            border: 0;
            border-radius: 8px;

            background: #ffc107;

            color: #111;

            font-weight: bold;

            cursor: pointer;
        }

        .error {
            margin-top: 12px;

            color: #ff6464;

            font-size: 12px;
        }
    </style>
</head>

<body>

<div class="card">

    <h1>Admin Login</h1>

    <p>
        Enter the administrator password to continue.
    </p>

    <form method="POST" action="{{ route('admin.login') }}">

        @csrf

        <label for="password">
            Admin Password
        </label>

        <input
            type="password"
            id="password"
            name="password"
            placeholder="Enter password"
            required
            autofocus>

        @error('password')
            <div class="error">
                {{ $message }}
            </div>
        @enderror

        <button type="submit">
            Login
        </button>

    </form>

</div>

</body>

</html>