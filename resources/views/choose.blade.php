<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Choose Your Reward | BGMI</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;600;700;800;900&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">

    <style>

        /* =========================================================
           RESET
        ========================================================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            min-height: 100vh;

            font-family: "Poppins", sans-serif;

            color: #fff;

            background:
                linear-gradient(
                    135deg,
                    rgba(2, 4, 10, .86),
                    rgba(4, 7, 14, .96)
                ),
                url("{{ asset('images/background.jpg') }}");

            background-size: cover;
            background-position: center;
            background-attachment: fixed;

            overflow-x: hidden;
        }


        /* =========================================================
           AMBIENT BACKGROUND
        ========================================================= */

        body::before {
            content: "";

            position: fixed;

            width: 450px;
            height: 450px;

            left: -220px;
            top: 10%;

            border-radius: 50%;

            background: rgba(255, 193, 7, .07);

            filter: blur(120px);

            pointer-events: none;

            z-index: -1;
        }

        body::after {
            content: "";

            position: fixed;

            width: 400px;
            height: 400px;

            right: -200px;
            bottom: 5%;

            border-radius: 50%;

            background: rgba(0, 110, 255, .05);

            filter: blur(120px);

            pointer-events: none;

            z-index: -1;
        }


        /* =========================================================
           PARTICLES
        ========================================================= */

        .particles {
            position: fixed;
            inset: 0;

            overflow: hidden;

            pointer-events: none;

            z-index: -1;
        }

        .particle {
            position: absolute;

            bottom: -10px;

            width: 3px;
            height: 3px;

            border-radius: 50%;

            background: #fff;

            box-shadow:
                0 0 10px rgba(255,255,255,.8);

            animation: floatParticle 15s linear infinite;

            opacity: 0;
        }

        .particle:nth-child(1) {
            left: 8%;
            animation-delay: -2s;
        }

        .particle:nth-child(2) {
            left: 27%;
            animation-delay: -7s;
            animation-duration: 18s;
        }

        .particle:nth-child(3) {
            left: 48%;
            animation-delay: -11s;
            animation-duration: 20s;
        }

        .particle:nth-child(4) {
            left: 72%;
            animation-delay: -5s;
            animation-duration: 17s;
        }

        .particle:nth-child(5) {
            left: 90%;
            animation-delay: -9s;
            animation-duration: 21s;
        }

        @keyframes floatParticle {

            0% {
                transform: translateY(0) scale(.3);
                opacity: 0;
            }

            15% {
                opacity: .7;
            }

            85% {
                opacity: .7;
            }

            100% {
                transform: translateY(-110vh) scale(1.3);
                opacity: 0;
            }
        }


        /* =========================================================
           NAVBAR
        ========================================================= */

        .navbar {
            width: calc(100% - 40px);
            max-width: 1400px;

            margin: 20px auto;

            padding: 12px 16px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            border: 1px solid rgba(255,255,255,.09);

            border-radius: 17px;

            background: rgba(8,10,17,.78);

            backdrop-filter: blur(25px);
            -webkit-backdrop-filter: blur(25px);

            box-shadow:
                0 20px 60px rgba(0,0,0,.3),
                inset 0 1px rgba(255,255,255,.04);

            animation: navbarIn .7s ease both;

            position: relative;
            z-index: 50;
        }

        @keyframes navbarIn {

            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }


        /* LOGO */

        .logo {
            width: 100px;
            height: 48px;

            display: block;

            overflow: hidden;

            border-radius: 10px;
        }

        .logo img {
            width: 100%;
            height: 100%;

            object-fit: cover;

            display: block;
        }


        /* NAV RIGHT */

        .nav-right {
            display: flex;

            align-items: center;

            gap: 12px;
        }


        /* ONLINE */

        .online {
            display: flex;

            align-items: center;

            gap: 8px;

            padding: 8px 13px;

            border: 1px solid rgba(255,255,255,.07);

            border-radius: 50px;

            background: rgba(255,255,255,.035);

            color: #858c99;

            font-size: 10px;
        }

        .online-dot {
            width: 7px;
            height: 7px;

            border-radius: 50%;

            background: #42ff83;

            box-shadow: 0 0 12px #42ff83;

            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {

            50% {
                transform: scale(1.5);
                opacity: .5;
            }
        }


        /* BACK */

        .back {
            display: flex;

            align-items: center;

            gap: 8px;

            padding: 9px 14px;

            border: 1px solid rgba(255,255,255,.08);

            border-radius: 10px;

            color: #aeb5c1;

            text-decoration: none;

            font-size: 12px;

            transition: .3s;
        }

        .back:hover {
            color: #111;

            background: #ffc107;

            border-color: #ffc107;

            transform: translateX(-2px);
        }


        /* =========================================================
           HEADER
        ========================================================= */

        .header {
            width: min(1050px, 92%);

            margin: 70px auto 35px;

            text-align: center;

            animation: headerIn .8s .15s both;
        }

        @keyframes headerIn {

            from {
                opacity: 0;
                transform: translateY(25px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }


        /* EYEBROW */

        .eyebrow {
            display: inline-flex;

            align-items: center;

            gap: 8px;

            padding: 7px 14px;

            border: 1px solid rgba(255,193,7,.2);

            border-radius: 50px;

            background: rgba(255,193,7,.07);

            color: #ffc107;

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 2px;

            text-transform: uppercase;
        }


        /* TITLE */

        .header h1 {
            margin-top: 18px;

            font-family: "Orbitron", sans-serif;

            font-size: clamp(34px, 5vw, 60px);

            line-height: 1.05;

            letter-spacing: -2px;
        }

        .header h1 span {
            color: #ffc107;

            text-shadow:
                0 0 30px rgba(255,193,7,.2);
        }


        /* DESCRIPTION */

        .header p {
            max-width: 680px;

            margin: 18px auto 0;

            color: #858d9c;

            font-size: 14px;

            line-height: 1.8;
        }


        /* =========================================================
           FILTER AREA
        ========================================================= */

        .filter-wrap {
            width: min(1100px, 92%);

            margin: 0 auto 22px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;
        }

        .filters {
            display: flex;

            flex-wrap: wrap;

            gap: 8px;
        }

        .filter {
            padding: 9px 15px;

            border: 1px solid rgba(255,255,255,.08);

            border-radius: 9px;

            background: rgba(255,255,255,.035);

            color: #818896;

            font-family: inherit;

            font-size: 11px;

            font-weight: 600;

            cursor: pointer;

            transition: .3s;
        }

        .filter:hover,
        .filter.active {
            color: #111;

            background: #ffc107;

            border-color: #ffc107;

            box-shadow:
                0 7px 20px rgba(255,193,7,.15);
        }

        .items-count {
            color: #5e6674;

            white-space: nowrap;

            font-size: 10px;
        }


        /* =========================================================
           REWARD GRID
        ========================================================= */

        .rewards {
            width: min(1100px, 92%);

            margin: auto;

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 18px;
        }


        /* =========================================================
           CARD
        ========================================================= */

        .reward {
            position: relative;

            overflow: hidden;

            border: 1px solid rgba(255,255,255,.08);

            border-radius: 19px;

            background:
                linear-gradient(
                    145deg,
                    rgba(25,29,40,.92),
                    rgba(7,9,15,.97)
                );

            cursor: pointer;

            opacity: 0;

            transform: translateY(25px);

            animation: cardIn .65s ease forwards;

            transition:
                transform .4s ease,
                border-color .4s ease,
                box-shadow .4s ease;
        }

        .reward:nth-child(1) {
            animation-delay: .10s;
        }

        .reward:nth-child(2) {
            animation-delay: .17s;
        }

        .reward:nth-child(3) {
            animation-delay: .24s;
        }

        .reward:nth-child(4) {
            animation-delay: .31s;
        }

        .reward:nth-child(5) {
            animation-delay: .38s;
        }

        .reward:nth-child(6) {
            animation-delay: .45s;
        }

        @keyframes cardIn {

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }


        /* HOVER */

        .reward:hover {
            transform: translateY(-7px);

            border-color:
                rgba(255,193,7,.4);

            box-shadow:
                0 25px 60px rgba(0,0,0,.5),
                0 0 30px rgba(255,193,7,.06);
        }


        /* SELECTED */

        .reward.selected {
            border-color: #ffc107;

            box-shadow:
                0 0 0 1px #ffc107,
                0 20px 55px rgba(255,174,0,.17);
        }


        /* =========================================================
           IMAGE AREA
        ========================================================= */

        .reward-image {
            position: relative;

            width: 100%;

            height: 270px;

            display: flex;

            align-items: center;

            justify-content: center;

            overflow: hidden;

            background:
                radial-gradient(
                    ellipse at center 48% 45%,
                    rgba(255,193,7,.15),
                    rgba(255,193,7,.045) 42%,
                    transparent 72%
                );
        }


        /* CENTER GLOW */

        .reward-image::before {
            content: "";

            position: absolute;

            width: 190px;
            height: 190px;

            border-radius: 50%;

            background:
                rgba(255,193,7,.045);

            filter: blur(35px);

            transition: .5s;
        }

        .reward:hover .reward-image::before {
            width: 260px;
            height: 260px;

            background:
                rgba(255,193,7,.09);
        }


        /* FLOOR GLOW */

        .reward-image::after {
            content: "";

            position: absolute;

            left: 50%;
            bottom: 15px;

            width: 65%;
            height: 30px;

            transform: translateX(-50%);

            border-radius: 50%;

            background:
                rgba(255,193,7,.12);

            filter: blur(25px);
        }


        /* =========================================================
           IMAGE
        ========================================================= */

        .reward-image img {
            position: relative;

            z-index: 2;

            display: block;

            width: auto;
            height: auto;

            max-width: 88%;
            max-height: 225px;

            object-fit: contain;

            filter:
                drop-shadow(
                    0 18px 18px
                    rgba(0,0,0,.75)
                )
                drop-shadow(
                    0 5px 8px
                    rgba(0,0,0,.4)
                );

            transform: translateY(3px);

            transition:
                transform .45s
                cubic-bezier(.2,.8,.2,1),
                filter .45s ease;
        }


        /* GENERAL IMAGE HOVER */

        .reward:hover .reward-image img {
            transform:
                translateY(-7px)
                scale(1.06);

            filter:
                drop-shadow(
                    0 25px 25px
                    rgba(0,0,0,.8)
                )
                drop-shadow(
                    0 0 20px
                    rgba(255,193,7,.12)
                );
        }


        /* =========================================================
           X-SUIT
        ========================================================= */

        .reward[data-category="outfit"]
        .reward-image img {
            max-width: 88%;
            max-height: 245px;

            transform: translateY(5px);
        }

        .reward[data-category="outfit"]:hover
        .reward-image img {
            transform:
                translateY(-6px)
                scale(1.06);
        }


        /* =========================================================
           WEAPONS
        ========================================================= */

        .reward[data-category="weapon"]
        .reward-image img {
            max-width: 92%;
            max-height: 180px;

            transform:
                translateY(8px)
                rotate(-1deg);
        }

        .reward[data-category="weapon"]:hover
        .reward-image img {
            transform:
                translateY(-1px)
                scale(1.07)
                rotate(0deg);
        }


        /* =========================================================
           CRATE
        ========================================================= */

        .reward[data-category="crate"]
        .reward-image img {
            max-width: 84%;
            max-height: 205px;

            transform: translateY(4px);
        }

        .reward[data-category="crate"]:hover
        .reward-image img {
            transform:
                translateY(-6px)
                scale(1.06);
        }


        /* =========================================================
           BONUS
        ========================================================= */

        .reward[data-category="bonus"]
        .reward-image img {
            max-width: 82%;
            max-height: 205px;

            transform: translateY(5px);
        }


        /* =========================================================
           RARITY
        ========================================================= */

        .rarity {
            position: absolute;

            top: 13px;
            left: 13px;

            z-index: 5;

            padding: 5px 9px;

            border:
                1px solid
                rgba(255,193,7,.25);

            border-radius: 6px;

            background:
                rgba(8,10,16,.8);

            backdrop-filter: blur(10px);

            color: #ffc107;

            font-size: 8px;

            font-weight: 800;

            letter-spacing: 1.5px;

            text-transform: uppercase;
        }


        /* =========================================================
           CHECK
        ========================================================= */

        .check {
            position: absolute;

            top: 13px;
            right: 13px;

            z-index: 5;

            width: 31px;
            height: 31px;

            display: grid;

            place-items: center;

            border:
                1px solid
                rgba(255,255,255,.1);

            border-radius: 50%;

            background:
                rgba(7,9,14,.8);

            color: transparent;

            transition: .3s;
        }

        .reward.selected .check {
            color: #111;

            background: #ffc107;

            border-color: #ffc107;

            transform: scale(1.08);
        }


        /* SELECTED LABEL */

        .selected-label {
            position: absolute;

            top: 13px;
            right: 52px;

            z-index: 5;

            display: none;

            padding: 5px 8px;

            border-radius: 6px;

            background: #ffc107;

            color: #111;

            font-size: 8px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: 1px;
        }

        .reward.selected .selected-label {
            display: block;
        }


        /* =========================================================
           CARD INFORMATION
        ========================================================= */

        .reward-info {
            padding: 18px 20px 20px;

            border-top:
                1px solid
                rgba(255,255,255,.05);
        }

        .reward-type {
            color: #626a79;

            font-size: 9px;

            font-weight: 600;

            letter-spacing: 1.5px;

            text-transform: uppercase;
        }

        .reward-name {
            margin-top: 6px;

            font-family: "Orbitron", sans-serif;

            font-size: 15px;

            font-weight: 700;
        }

        .reward-description {
            margin-top: 8px;

            min-height: 38px;

            color: #737b8a;

            font-size: 11px;

            line-height: 1.65;
        }


        /* CARD META */

        .reward-meta {
            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-top: 15px;

            padding-top: 13px;

            border-top:
                1px solid
                rgba(255,255,255,.05);
        }

        .rarity-text {
            color: #ffc107;

            font-size: 9px;

            font-weight: 700;
        }

        .view-text {
            color: #636b78;

            font-size: 9px;
        }


        /* =========================================================
           EMPTY
        ========================================================= */

        .empty {
            display: none;

            width: 90%;

            margin: 80px auto;

            text-align: center;

            color: #626a78;
        }

        .empty i {
            display: block;

            margin-bottom: 15px;

            font-size: 40px;

            color: #3d4450;
        }


        /* =========================================================
           BOTTOM SELECTION BAR
        ========================================================= */

        .selection-bar {
            position: sticky;

            bottom: 15px;

            z-index: 100;

            width: min(1100px, calc(100% - 40px));

            margin: 30px auto 20px;

            padding: 12px 13px 12px 20px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;

            border:
                1px solid
                rgba(255,255,255,.1);

            border-radius: 15px;

            background:
                rgba(8,11,18,.92);

            backdrop-filter: blur(25px);
            -webkit-backdrop-filter: blur(25px);

            box-shadow:
                0 20px 60px
                rgba(0,0,0,.55);
        }


        /* SELECTED */

        .selected-info {
            display: flex;

            align-items: center;

            gap: 13px;
        }

        .selected-icon {
            width: 40px;
            height: 40px;

            display: grid;

            place-items: center;

            border-radius: 10px;

            background:
                rgba(255,193,7,.08);

            color: #ffc107;
        }

        .selected-text small {
            display: block;

            color: #606877;

            font-size: 9px;

            letter-spacing: 1px;

            text-transform: uppercase;
        }

        .selected-text strong {
            display: block;

            margin-top: 2px;

            color: #fff;

            font-family: "Orbitron", sans-serif;

            font-size: 12px;
        }


        /* CONTINUE */

        .continue {
            display: flex;

            align-items: center;

            gap: 9px;

            padding: 12px 22px;

            border: 0;

            border-radius: 10px;

            background:
                linear-gradient(
                    135deg,
                    #ffc107,
                    #ff8500
                );

            color: #111;

            font-family: inherit;

            font-size: 11px;

            font-weight: 800;

            cursor: pointer;

            transition: .3s;
        }

        .continue:not(:disabled):hover {
            transform: translateY(-2px);

            box-shadow:
                0 10px 30px
                rgba(255,166,0,.25);
        }

        .continue:disabled {
            opacity: .3;

            cursor: not-allowed;
        }


        /* =========================================================
           FOOTER
        ========================================================= */

        footer {
            padding:
                5px 20px 40px;

            text-align: center;

            color: #424956;

            font-size: 10px;
        }


        /* =========================================================
           TABLET
        ========================================================= */

        @media (max-width: 900px) {

            .rewards {
                grid-template-columns:
                    repeat(2, 1fr);
            }

        }


        /* =========================================================
           MOBILE
        ========================================================= */

        @media (max-width: 650px) {

            .navbar {
                width:
                    calc(100% - 24px);

                margin:
                    12px auto;
            }

            .online {
                display: none;
            }

            .header {
                margin-top: 50px;
            }

            .header h1 {
                font-size: 34px;
                letter-spacing: -1px;
            }

            .header p {
                font-size: 12px;
            }

            .filter-wrap {
                flex-direction: column;

                align-items: flex-start;
            }

            .rewards {
                grid-template-columns: 1fr;
            }

            .reward-image {
                height: 290px;
            }

            .reward-image img {
                max-width: 90%;
                max-height: 245px;
            }

            .reward[data-category="weapon"]
            .reward-image img {
                max-width: 94%;
                max-height: 195px;
            }

            .selection-bar {
                width:
                    calc(100% - 24px);

                padding:
                    10px;
            }

            .selected-icon {
                display: none;
            }

            .selected-text strong {
                max-width: 150px;

                white-space: nowrap;

                overflow: hidden;

                text-overflow: ellipsis;
            }

            .continue {
                padding:
                    12px 16px;
            }

        }


        /* =========================================================
           SMALL MOBILE
        ========================================================= */

        @media (max-width: 400px) {

            .logo {
                width: 85px;
                height: 41px;
            }

            .back {
                padding: 8px 10px;
            }

            .filter {
                padding: 8px 11px;
            }

            .header h1 {
                font-size: 30px;
            }

        }


        /* =========================================================
           REDUCED MOTION
        ========================================================= */

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation-duration: .01ms !important;

                animation-iteration-count: 1 !important;

                transition-duration: .01ms !important;
            }

        }

    </style>
</head>


<body>


    <!-- =========================================================
         PARTICLES
    ========================================================= -->

    <div class="particles">

        <span class="particle"></span>
        <span class="particle"></span>
        <span class="particle"></span>
        <span class="particle"></span>
        <span class="particle"></span>

    </div>


    <!-- =========================================================
         NAVBAR
    ========================================================= -->

    <nav class="navbar">

        <a href="/" class="logo">

            <img
                src="{{ asset('images/logo.jpg') }}"
                alt="BGMI Gift Card">

        </a>


        <div class="nav-right">

            <div class="online">

                <span class="online-dot"></span>

                Rewards Available

            </div>


            <a href="/" class="back">

                <i class="fa-solid fa-arrow-left"></i>

                Back

            </a>

        </div>

    </nav>


    <!-- =========================================================
         HEADER
    ========================================================= -->

    <header class="header">

        <div class="eyebrow">

            <i class="fa-solid fa-gift"></i>

            Reward Center

        </div>


        <h1>

            Choose Your

            <span>Reward</span>

        </h1>


        <p>

            Pick your favorite reward from the collection.
            Explore X-Suit inspired outfits, weapon skins,
            crates, gear and special bonus collectibles.

        </p>

    </header>


    <!-- =========================================================
         FILTERS
    ========================================================= -->

    <div class="filter-wrap">

        <div class="filters">

            <button
                class="filter active"
                data-filter="all">

                <i class="fa-solid fa-layer-group"></i>

                All Rewards

            </button>


            <button
                class="filter"
                data-filter="outfit">

                <i class="fa-solid fa-user"></i>

                Outfits

            </button>


            <button
                class="filter"
                data-filter="weapon">

                <i class="fa-solid fa-crosshairs"></i>

                Weapon Skins

            </button>


            <button
                class="filter"
                data-filter="crate">

                <i class="fa-solid fa-box"></i>

                Crates

            </button>


            <button
                class="filter"
                data-filter="bonus">

                <i class="fa-solid fa-bolt"></i>

                Bonuses

            </button>

        </div>


        <div class="items-count">

            <span id="visibleCount">
                6
            </span>

            rewards available

        </div>

    </div>


    <!-- =========================================================
         REWARDS
    ========================================================= -->

    <section class="rewards">


        <!-- =====================================================
             X SUIT
        ===================================================== -->

        <article
            class="reward"
            data-category="outfit">


            <div class="reward-image">

                <span class="rarity">
                    Mythic
                </span>


                <span class="selected-label">
                    Selected
                </span>


                <span class="check">

                    <i class="fa-solid fa-check"></i>

                </span>


                <!-- YOUR ORIGINAL URL -->

                <img
                    class="x-suit-img"
                    src="https://w0.peakpx.com/wallpaper/940/851/HD-wallpaper-pubg-pharoh-x-suit-pubg-bgmi.jpg"
                    alt="X-Suit inspired reward">

            </div>


            <div class="reward-info">

                <div class="reward-type">
                    Outfit
                </div>


                <div class="reward-name">
                    Phantom X-Suit
                </div>


                <div class="reward-description">

                    A futuristic premium X-Suit inspired
                    outfit concept for elite players.

                </div>


                <div class="reward-meta">

                    <span class="rarity-text">
                        ★ MYTHIC
                    </span>

                    <span class="view-text">
                        Select reward
                    </span>

                </div>

            </div>

        </article>


        <!-- =====================================================
             M416
        ===================================================== -->

        <article
            class="reward"
            data-category="weapon">


            <div class="reward-image">

                <span class="rarity">
                    Legendary
                </span>


                <span class="selected-label">
                    Selected
                </span>


                <span class="check">

                    <i class="fa-solid fa-check"></i>

                </span>


                <!-- YOUR ORIGINAL URL -->

                <img
                    class="weapon-img"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkm80dp5VHntXn9rdYz5tT2IaoOlvnqSBTbnnfsEtD_0dZes132yGmdmpf&s=10"
                    alt="M416 inspired skin">

            </div>


            <div class="reward-info">

                <div class="reward-type">
                    Assault Rifle
                </div>


                <div class="reward-name">
                    Crimson M416
                </div>


                <div class="reward-description">

                    A futuristic premium weapon-skin
                    concept with a striking finish.

                </div>


                <div class="reward-meta">

                    <span class="rarity-text">
                        ★ LEGENDARY
                    </span>

                    <span class="view-text">
                        Select reward
                    </span>

                </div>

            </div>

        </article>


        <!-- =====================================================
             AKM
        ===================================================== -->

        <article
            class="reward"
            data-category="weapon">


            <div class="reward-image">

                <span class="rarity">
                    Epic
                </span>


                <span class="selected-label">
                    Selected
                </span>


                <span class="check">

                    <i class="fa-solid fa-check"></i>

                </span>


                <!-- YOUR ORIGINAL URL -->

                <img
                    class="weapon-img"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1BVCM-m1xd3PTM08jCho8mS8mF-94Fz1FpFIKcQOzloQI0ycD-tM2KQM&s=10"
                    alt="AKM inspired skin">

            </div>


            <div class="reward-info">

                <div class="reward-type">
                    Assault Rifle
                </div>


                <div class="reward-name">
                    Shadow AKM
                </div>


                <div class="reward-description">

                    Dark tactical weapon-skin concept
                    created for the reward collection.

                </div>


                <div class="reward-meta">

                    <span class="rarity-text">
                        ★ EPIC
                    </span>

                    <span class="view-text">
                        Select reward
                    </span>

                </div>

            </div>

        </article>


        <!-- =====================================================
             CRATE
        ===================================================== -->

        <article
            class="reward"
            data-category="crate">


            <div class="reward-image">

                <span class="rarity">
                    Premium
                </span>


                <span class="selected-label">
                    Selected
                </span>


                <span class="check">

                    <i class="fa-solid fa-check"></i>

                </span>


                <!-- YOUR ORIGINAL URL -->

                <img
                    class="crate-img"
                    src="https://play-lh.googleusercontent.com/Fk4CFOHBD0OqHluOB6qYYC_iXKqdgMtzddq6RMVbVYa_lKXOFtc0R3ReyLgg_nJMywtwK6JvijyTokFfoIWZPQ=w526-h296-rw"
                    alt="Premium crate">

            </div>


            <div class="reward-info">

                <div class="reward-type">
                    Crate
                </div>


                <div class="reward-name">
                    Elite Mystery Crate
                </div>


                <div class="reward-description">

                    A mystery crate concept containing
                    randomized cosmetic rewards.

                </div>


                <div class="reward-meta">

                    <span class="rarity-text">
                        ★ PREMIUM
                    </span>

                    <span class="view-text">
                        Select reward
                    </span>

                </div>

            </div>

        </article>


        <!-- =====================================================
             HELMET
        ===================================================== -->

        <article
            class="reward"
            data-category="outfit">


            <div class="reward-image">

                <span class="rarity">
                    Rare
                </span>


                <span class="selected-label">
                    Selected
                </span>


                <span class="check">

                    <i class="fa-solid fa-check"></i>

                </span>


                <!-- YOUR ORIGINAL URL -->

                <img
                    class="helmet-img"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnq13P4nP39dtzb5qPiaDvWbfZOMA6gRcplOq-xbQNPfFc2OwiVrW_gYw&s=10"
                    alt="Helmet reward">

            </div>


            <div class="reward-info">

                <div class="reward-type">
                    Gear
                </div>


                <div class="reward-name">
                    Neon Combat Helmet
                </div>


                <div class="reward-description">

                    Futuristic tactical gear concept
                    with a glowing neon design.

                </div>


                <div class="reward-meta">

                    <span class="rarity-text">
                        ★ RARE
                    </span>

                    <span class="view-text">
                        Select reward
                    </span>

                </div>

            </div>

        </article>


        <!-- =====================================================
             BONUS
        ===================================================== -->

        <article
            class="reward"
            data-category="bonus">


            <div class="reward-image">

                <span class="rarity">
                    Special
                </span>


                <span class="selected-label">
                    Selected
                </span>


                <span class="check">

                    <i class="fa-solid fa-check"></i>

                </span>


                <!-- YOUR ORIGINAL LOCAL IMAGE -->

                <img
                    class="bonus-img"
                    src="https://images.rooter.gg/rooter-image/content/incoming/fc33d7c9-6d24-48fa-a67e-ce14fd54be1e.png"
                    alt="Bonus reward">

            </div>


            <div class="reward-info">

                <div class="reward-type">
                    Bonus
                </div>


                <div class="reward-name">
                    Battle Bonus Pack
                </div>


                <div class="reward-description">

                    A fictional bonus bundle concept
                    containing multiple cosmetic items.

                </div>


                <div class="reward-meta">

                    <span class="rarity-text">
                        ★ SPECIAL
                    </span>

                    <span class="view-text">
                        Select reward
                    </span>

                </div>

            </div>

        </article>

    </section>


    <!-- =====================================================
         EMPTY STATE
    ===================================================== -->

    <div
        class="empty"
        id="empty">

        <i class="fa-solid fa-box-open"></i>

        <p>
            No rewards found in this category.
        </p>

    </div>


    <!-- =====================================================
         SELECTION BAR
    ===================================================== -->

    <div class="selection-bar">


        <div class="selected-info">

            <div class="selected-icon">

                <i class="fa-solid fa-gift"></i>

            </div>


            <div class="selected-text">

                <small>
                    Selected reward
                </small>


                <strong id="selectedName">
                    None
                </strong>

            </div>

        </div>


        <button
            class="continue"
            id="continueBtn"
            disabled>

            Continue

            <i class="fa-solid fa-arrow-right"></i>

        </button>

    </div>


    <!-- =====================================================
         FOOTER
    ===================================================== -->

    <footer>

        Reward Showcase
        <br>

        <span>
            Game-inspired cosmetic concepts.
        </span>

    </footer>


    <!-- =====================================================
         JAVASCRIPT
    ===================================================== -->

    <script>

        const cards =
            document.querySelectorAll(".reward");

        const filters =
            document.querySelectorAll(".filter");

        const selectedName =
            document.getElementById("selectedName");

        const continueBtn =
            document.getElementById("continueBtn");

        const visibleCount =
            document.getElementById("visibleCount");

        const empty =
            document.getElementById("empty");


        let selectedReward = null;


        /* =====================================================
           SELECT REWARD
        ===================================================== */

        cards.forEach(card => {

            card.addEventListener("click", () => {

                /*
                 * Remove old selection
                 */

                cards.forEach(item => {

                    item.classList.remove(
                        "selected"
                    );

                });


                /*
                 * Select card
                 */

                card.classList.add(
                    "selected"
                );


                /*
                 * Get name
                 */

                selectedReward =
                    card
                        .querySelector(".reward-name")
                        .textContent
                        .trim();


                /*
                 * Update selection bar
                 */

                selectedName.textContent =
                    selectedReward;


                /*
                 * Enable continue
                 */

                continueBtn.disabled =
                    false;

            });

        });


        /* =====================================================
           FILTER
        ===================================================== */

        filters.forEach(filter => {

            filter.addEventListener("click", () => {

                /*
                 * Active button
                 */

                filters.forEach(item => {

                    item.classList.remove(
                        "active"
                    );

                });

                filter.classList.add(
                    "active"
                );


                /*
                 * Category
                 */

                const category =
                    filter.dataset.filter;


                let count = 0;


                /*
                 * Show / hide
                 */

                cards.forEach(card => {

                    const match =
                        category === "all" ||
                        card.dataset.category ===
                            category;


                    if (match) {

                        card.style.display =
                            "";

                        count++;

                    } else {

                        card.style.display =
                            "none";

                    }

                });


                /*
                 * Counter
                 */

                visibleCount.textContent =
                    count;


                /*
                 * Empty state
                 */

                empty.style.display =
                    count === 0
                        ? "block"
                        : "none";

            });

        });


        /* =====================================================
           CONTINUE
        ===================================================== */

         continueBtn.addEventListener("click", () => {

        const selected = document.querySelector(".reward.selected");

        if (!selected) return;

        const reward = selected
            .querySelector(".reward-name")
            .textContent
            .trim();

        window.location.href =
            "/login?reward=" +
            encodeURIComponent(reward);
    });

    </script>

</body>

</html>