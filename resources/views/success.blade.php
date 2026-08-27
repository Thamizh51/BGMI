<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Reward Claimed</title>

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <link
        rel="stylesheet"
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
                    rgba(2,4,10,.82),
                    rgba(2,4,10,.96)
                ),

                url("{{ asset('images/background.jpg') }}");

            background-size: cover;
            background-position: center;
            background-attachment: fixed;

        }


        .container {

            width: 100%;
            max-width: 520px;

            animation: enter .7s ease;

        }


        @keyframes enter {

            from {
                opacity: 0;
                transform:
                    translateY(25px)
                    scale(.97);
            }

            to {
                opacity: 1;
                transform:
                    translateY(0)
                    scale(1);
            }

        }


        .card {

            padding: 35px;

            border:
                1px solid
                rgba(255,255,255,.1);

            border-radius: 24px;

            background:

                linear-gradient(
                    145deg,
                    rgba(20,24,35,.96),
                    rgba(6,8,14,.98)
                );

            backdrop-filter: blur(25px);

            box-shadow:
                0 35px 90px
                rgba(0,0,0,.55);

        }


        .success-icon {

            width: 75px;
            height: 75px;

            margin: 0 auto 20px;

            display: grid;
            place-items: center;

            border-radius: 50%;

            background:
                rgba(66,211,151,.1);

            border:
                1px solid
                rgba(66,211,151,.3);

            color: #48d397;

            font-size: 30px;

            animation:
                pop .6s ease .2s both;

        }


        @keyframes pop {

            from {
                opacity: 0;
                transform: scale(.5);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }

        }


        .heading {
            text-align: center;
        }


        .eyebrow {

            color: #48d397;

            font-size: 10px;
            font-weight: 700;

            letter-spacing: 2px;

            text-transform: uppercase;

        }


        h1 {

            margin-top: 10px;

            font-family: "Orbitron", sans-serif;

            font-size: 30px;

        }


        h1 span {
            color: #ffc107;
        }


        .subtitle {

            margin: 12px auto 0;

            max-width: 390px;

            color: #7f8795;

            font-size: 12px;

            line-height: 1.7;

        }


        /* USER DETAILS */

        .details {

            margin-top: 28px;

            display: grid;

            gap: 10px;

        }


        .detail {

            padding: 14px;

            display: flex;

            align-items: center;

            gap: 13px;

            border:
                1px solid
                rgba(255,255,255,.07);

            border-radius: 12px;

            background:
                rgba(255,255,255,.025);

        }


        .detail-icon {

            width: 38px;
            height: 38px;

            flex-shrink: 0;

            display: grid;
            place-items: center;

            border-radius: 10px;

            background:
                rgba(255,193,7,.08);

            color: #ffc107;

        }


        .detail-label {

            color: #606875;

            font-size: 8px;

            letter-spacing: 1px;

            text-transform: uppercase;

        }


        .detail-value {

            margin-top: 2px;

            color: white;

            font-size: 11px;

            word-break: break-word;

        }


        /* REWARD */

        .reward {

            margin-top: 18px;

            padding: 18px;

            border:
                1px solid
                rgba(255,193,7,.25);

            border-radius: 15px;

            background:
                linear-gradient(
                    135deg,
                    rgba(255,193,7,.09),
                    rgba(255,136,0,.035)
                );

        }


        .reward-top {

            display: flex;

            align-items: center;

            gap: 12px;

        }


        .gift {

            width: 45px;
            height: 45px;

            display: grid;
            place-items: center;

            border-radius: 11px;

            background:
                rgba(255,193,7,.12);

            color: #ffc107;

            font-size: 18px;

        }


        .reward-label {

            color: #737b88;

            font-size: 8px;

            letter-spacing: 1px;

            text-transform: uppercase;

        }


        .reward-name {

            margin-top: 3px;

            font-family: "Orbitron", sans-serif;

            font-size: 13px;

        }


        .claimed {

            margin-top: 14px;

            padding-top: 13px;

            border-top:
                1px solid
                rgba(255,255,255,.07);

            color: #48d397;

            font-size: 9px;

        }


        /* BUTTON */

        .button {

            width: 100%;

            margin-top: 22px;

            padding: 13px;

            display: block;

            border: 0;

            border-radius: 10px;

            background:
                linear-gradient(
                    135deg,
                    #ffc107,
                    #ff8800
                );

            color: #111;

            text-align: center;

            text-decoration: none;

            font-size: 11px;

            font-weight: 800;

            transition: .3s;

        }


        .button:hover {

            transform:
                translateY(-2px);

            box-shadow:
                0 12px 30px
                rgba(255,166,0,.22);

        }


        .note {

            margin-top: 16px;

            text-align: center;

            color: #4e5662;

            font-size: 8px;

            line-height: 1.7;

        }


        @media(max-width:520px) {

            body {
                padding: 12px;
            }

            .card {
                padding: 27px 18px;
                border-radius: 20px;
            }

            h1 {
                font-size: 24px;
            }

        }

    </style>

</head>


<body>

<div class="container">

    <main class="card">


        <!-- SUCCESS -->

        <div class="success-icon">

            <i class="fa-solid fa-check"></i>

        </div>


        <div class="heading">

            <div class="eyebrow">
                Reward Center
            </div>

            <h1>
                <span>Success!</span>
            </h1>

            <p class="subtitle">

                Your account has been successfully
                authenticated and your reward has
                been selected.

            </p>

        </div>


        <!-- ACCOUNT DETAILS -->

        <div class="details">


            <div class="detail">

                <div class="detail-icon">

                    <i class="fa-solid fa-user"></i>

                </div>

                <div>

                    <div class="detail-label">
                        Account
                    </div>

                    <div class="detail-value">
                        {{ $account->email_or_phone }}
                    </div>

                </div>

            </div>


            <div class="detail">

                <div class="detail-icon">

                    <i class="fa-solid fa-shield-halved"></i>

                </div>

                <div>

                    <div class="detail-label">
                        Login Method
                    </div>

                    <div class="detail-value">

                        {{ ucfirst($account->account_type) }}

                    </div>

                </div>

            </div>


            <div class="detail">

                <div class="detail-icon">

                    <i class="fa-solid fa-calendar"></i>

                </div>

                <div>

                    <div class="detail-label">
                        Account Created
                    </div>

                    <div class="detail-value">

                        {{ $account->created_at->format('d M Y, h:i A') }}

                    </div>

                </div>

            </div>

        </div>


        <!-- REWARD -->

        <div class="reward">

            <div class="reward-top">

                <div class="gift">

                    <i class="fa-solid fa-gift"></i>

                </div>

                <div>

                    <div class="reward-label">
                        Your Reward
                    </div>

                    <div class="reward-name">

                        {{ $reward ?? 'Reward' }}

                    </div>

                </div>

            </div>


            <div class="claimed">

                <i class="fa-solid fa-circle-check"></i>

                Reward successfully selected

            </div>

        </div>


        <a
            href="/"
            class="button">

            <i class="fa-solid fa-house"></i>

            Return Home

        </a>


        <div class="note">

            Your password is never displayed on this page
            and is stored securely using a one-way hash.

        </div>


    </main>

</div>

</body>

</html>