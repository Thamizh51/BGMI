<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BGMI | Free Gifts</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css"
        integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    <style>
        /* ==============================
           RESET
        ============================== */

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
            color: #fff;
            font-family: "Poppins", sans-serif;
            background: #05070d;
            overflow-x: hidden;
        }

        button,
        a {
            font-family: inherit;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* ==============================
           BACKGROUND
        ============================== */

        body::before {
            content: "";
            position: fixed;
            inset: 0;

            background:
                linear-gradient(
                    135deg,
                    rgba(3, 5, 12, 0.82),
                    rgba(5, 7, 15, 0.65)
                ),
                url("{{ asset('images/background.jpg') }}");

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            z-index: -3;
            transform: scale(1.05);
        }

        body::after {
            content: "";
            position: fixed;
            inset: 0;

            background:
                radial-gradient(
                    circle at 20% 20%,
                    rgba(255, 183, 0, 0.12),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 80% 70%,
                    rgba(0, 180, 255, 0.12),
                    transparent 30%
                );

            z-index: -2;
            pointer-events: none;
        }

        /* ==============================
           FLOATING PARTICLES
        ============================== */

        .particles {
            position: fixed;
            inset: 0;
            pointer-events: none;
            overflow: hidden;
            z-index: -1;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 50%;
            box-shadow: 0 0 12px rgba(255, 255, 255, 0.8);
            animation: floatParticle linear infinite;
        }

        .particle:nth-child(1) {
            left: 10%;
            animation-duration: 12s;
            animation-delay: -3s;
        }

        .particle:nth-child(2) {
            left: 25%;
            animation-duration: 18s;
            animation-delay: -7s;
        }

        .particle:nth-child(3) {
            left: 40%;
            animation-duration: 15s;
            animation-delay: -2s;
        }

        .particle:nth-child(4) {
            left: 60%;
            animation-duration: 20s;
            animation-delay: -10s;
        }

        .particle:nth-child(5) {
            left: 75%;
            animation-duration: 13s;
            animation-delay: -5s;
        }

        .particle:nth-child(6) {
            left: 90%;
            animation-duration: 17s;
            animation-delay: -8s;
        }

        @keyframes floatParticle {
            from {
                transform: translateY(110vh) scale(0);
                opacity: 0;
            }

            20% {
                opacity: 1;
            }

            80% {
                opacity: 1;
            }

            to {
                transform: translateY(-20vh) scale(1.5);
                opacity: 0;
            }
        }

        /* ==============================
           NAVBAR
        ============================== */

        .navbar {
            position: relative;

            width: calc(100% - 40px);
            max-width: 1400px;

            margin: 20px auto;

            padding: 14px 20px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 18px;

            background: rgba(8, 10, 18, 0.72);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);

            box-shadow:
                0 15px 50px rgba(0, 0, 0, 0.35),
                inset 0 1px rgba(255, 255, 255, 0.06);

            z-index: 10;

            animation: navbarIn 0.8s ease forwards;
        }

        @keyframes navbarIn {
            from {
                opacity: 0;
                transform: translateY(-25px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo {
            width: 100px;
            height: 48px;
            overflow: hidden;
            border-radius: 10px;
        }

        .logo img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .status {
            display: flex;
            align-items: center;
            gap: 8px;

            padding: 9px 15px;

            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 50px;

            background: rgba(255, 255, 255, 0.05);

            font-size: 12px;
            color: #bfc5d2;
        }

        .status-dot {
            width: 7px;
            height: 7px;
            background: #39ff88;
            border-radius: 50%;
            box-shadow: 0 0 12px #39ff88;
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            50% {
                transform: scale(1.4);
                opacity: 0.5;
            }
        }

        .menu-btn {
            width: 43px;
            height: 43px;

            display: grid;
            place-items: center;

            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;

            background: rgba(255, 255, 255, 0.06);

            color: #fff;
            font-size: 18px;

            cursor: pointer;
            transition: 0.3s ease;
        }

        .menu-btn:hover {
            background: #ffb300;
            color: #000;
            transform: rotate(5deg);
        }

        /* ==============================
           HERO
        ============================== */

        .hero {
            width: min(1100px, 92%);
            margin: 0 auto;

            min-height: 570px;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            text-align: center;
            padding: 70px 0 50px;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            padding: 9px 17px;

            border: 1px solid rgba(255, 193, 7, 0.35);
            border-radius: 50px;

            background: rgba(255, 179, 0, 0.08);

            color: #ffc107;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;

            animation: fadeUp 0.8s 0.2s both;
        }

        .badge i {
            animation: giftShake 1.8s infinite;
        }

        @keyframes giftShake {
            0%, 70%, 100% {
                transform: rotate(0);
            }

            75% {
                transform: rotate(-10deg);
            }

            80% {
                transform: rotate(10deg);
            }

            85% {
                transform: rotate(-7deg);
            }

            90% {
                transform: rotate(7deg);
            }
        }

        .hero h1 {
            max-width: 900px;

            margin-top: 25px;

            font-family: "Orbitron", sans-serif;
            font-size: clamp(38px, 6vw, 76px);
            font-weight: 800;
            line-height: 1.05;
            letter-spacing: -2px;

            animation: fadeUp 0.8s 0.35s both;
        }

        .hero h1 span {
            display: inline-block;

            background: linear-gradient(
                90deg,
                #fff,
                #ffc107,
                #ff8a00,
                #fff
            );

            background-size: 250% auto;

            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;

            animation: gradientMove 4s linear infinite;
        }

        @keyframes gradientMove {
            to {
                background-position: 250% center;
            }
        }

        .hero p {
            max-width: 720px;

            margin-top: 25px;

            color: #aeb5c3;
            font-size: clamp(15px, 2vw, 18px);
            line-height: 1.8;

            animation: fadeUp 0.8s 0.5s both;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(25px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ==============================
           CTA
        ============================== */

        .cta-wrapper {
            margin-top: 35px;

            display: flex;
            align-items: center;
            gap: 15px;

            animation: fadeUp 0.8s 0.65s both;
        }

        .claim-btn {
            position: relative;
            overflow: hidden;

            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;

            min-width: 200px;

            padding: 15px 28px;

            border: none;
            border-radius: 12px;

            background: linear-gradient(
                135deg,
                #ffc107,
                #ff8c00
            );

            color: #080808;

            font-size: 15px;
            font-weight: 800;

            cursor: pointer;

            box-shadow:
                0 10px 35px rgba(255, 166, 0, 0.25);

            transition: 0.3s ease;
        }

        .claim-btn::before {
            content: "";

            position: absolute;
            top: 0;
            left: -100%;

            width: 60%;
            height: 100%;

            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 255, 255, 0.5),
                transparent
            );

            transform: skewX(-20deg);

            animation: shine 3s infinite;
        }

        @keyframes shine {
            0% {
                left: -100%;
            }

            45%,
            100% {
                left: 150%;
            }
        }

        .claim-btn:hover {
            transform: translateY(-4px);
            box-shadow:
                0 15px 45px rgba(255, 166, 0, 0.4);
        }

        .claim-btn:active {
            transform: translateY(0) scale(0.97);
        }

        .secondary-btn {
            padding: 14px 20px;

            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 12px;

            background: rgba(255, 255, 255, 0.05);

            color: #d6dae2;

            font-size: 14px;

            transition: 0.3s ease;
        }

        .secondary-btn:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.25);
        }

        /* ==============================
           REWARD SECTION
        ============================== */

        .rewards-section {
            width: min(1150px, 92%);
            margin: 20px auto 90px;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 35px;

            opacity: 0;
            transform: translateY(25px);
            transition: 0.7s ease;
        }

        .section-heading.show {
            opacity: 1;
            transform: translateY(0);
        }

        .section-heading h2 {
            font-family: "Orbitron", sans-serif;
            font-size: clamp(25px, 4vw, 38px);
        }

        .section-heading p {
            margin-top: 10px;
            color: #858c9c;
            font-size: 14px;
        }

        .rewards-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .reward-card {
            position: relative;
            overflow: hidden;

            padding: 30px;

            min-height: 230px;

            border: 1px solid rgba(255, 255, 255, 0.09);
            border-radius: 20px;

            background: rgba(12, 15, 24, 0.75);
            backdrop-filter: blur(15px);

            transition:
                transform 0.4s ease,
                border-color 0.4s ease,
                box-shadow 0.4s ease;

            opacity: 0;
            transform: translateY(35px);
        }

        .reward-card.show {
            opacity: 1;
            transform: translateY(0);
        }

        .reward-card::before {
            content: "";

            position: absolute;
            width: 140px;
            height: 140px;

            top: -70px;
            right: -70px;

            border-radius: 50%;

            background: rgba(255, 193, 7, 0.08);
        }

        .reward-card:hover {
            transform: translateY(-8px);
            border-color: rgba(255, 193, 7, 0.35);

            box-shadow:
                0 20px 50px rgba(0, 0, 0, 0.3),
                0 0 30px rgba(255, 193, 7, 0.05);
        }

        .reward-icon {
            width: 55px;
            height: 55px;

            display: grid;
            place-items: center;

            margin-bottom: 20px;

            border-radius: 15px;

            background: linear-gradient(
                135deg,
                rgba(255, 193, 7, 0.2),
                rgba(255, 136, 0, 0.08)
            );

            border: 1px solid rgba(255, 193, 7, 0.2);

            color: #ffc107;
            font-size: 22px;
        }

        .reward-card h3 {
            font-family: "Orbitron", sans-serif;
            font-size: 17px;
            margin-bottom: 10px;
        }

        .reward-card p {
            color: #858c9c;
            font-size: 13px;
            line-height: 1.7;
        }

        /* ==============================
           HOW IT WORKS
        ============================== */

        .steps {
            width: min(1000px, 92%);
            margin: 0 auto 90px;
        }

        .steps-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .step {
            text-align: center;
            padding: 25px;

            opacity: 0;
            transform: translateY(30px);
            transition: 0.7s ease;
        }

        .step.show {
            opacity: 1;
            transform: translateY(0);
        }

        .step-number {
            width: 55px;
            height: 55px;

            display: grid;
            place-items: center;

            margin: 0 auto 18px;

            border-radius: 50%;

            background: rgba(255, 193, 7, 0.1);
            border: 1px solid rgba(255, 193, 7, 0.3);

            color: #ffc107;

            font-family: "Orbitron", sans-serif;
            font-weight: 700;
        }

        .step h3 {
            font-size: 16px;
            margin-bottom: 8px;
        }

        .step p {
            color: #858c9c;
            font-size: 13px;
            line-height: 1.7;
        }

        /* ==============================
           BOTTOM CTA
        ============================== */

        .bottom-cta {
            width: min(900px, 92%);
            margin: 0 auto 80px;

            position: relative;
            overflow: hidden;

            text-align: center;

            padding: 55px 30px;

            border: 1px solid rgba(255, 193, 7, 0.2);
            border-radius: 25px;

            background:
                linear-gradient(
                    135deg,
                    rgba(255, 193, 7, 0.08),
                    rgba(255, 255, 255, 0.025)
                );

            backdrop-filter: blur(20px);
        }

        .bottom-cta::before {
            content: "";

            position: absolute;

            width: 250px;
            height: 250px;

            left: 50%;
            top: 50%;

            transform: translate(-50%, -50%);

            border-radius: 50%;

            background: rgba(255, 193, 7, 0.08);

            filter: blur(70px);

            pointer-events: none;
        }

        .bottom-cta > * {
            position: relative;
            z-index: 1;
        }

        .bottom-cta h2 {
            font-family: "Orbitron", sans-serif;
            font-size: clamp(24px, 4vw, 38px);
        }

        .bottom-cta p {
            max-width: 600px;
            margin: 15px auto 25px;

            color: #9299a8;
            font-size: 14px;
            line-height: 1.8;
        }

        /* ==============================
           FOOTER
        ============================== */

        footer {
            padding: 25px;

            text-align: center;

            border-top: 1px solid rgba(255, 255, 255, 0.06);

            color: #686f7d;
            font-size: 12px;
        }

        footer span {
            color: #ffc107;
        }

        /* ==============================
           TOAST
        ============================== */

        .toast {
            position: fixed;

            left: 50%;
            bottom: 25px;

            transform: translate(-50%, 120px);

            padding: 13px 20px;

            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;

            background: rgba(15, 18, 27, 0.9);
            backdrop-filter: blur(15px);

            color: #fff;

            font-size: 13px;

            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);

            transition: 0.4s ease;

            z-index: 100;
        }

        .toast.show {
            transform: translate(-50%, 0);
        }

        /* ==============================
           RESPONSIVE
        ============================== */

        @media (max-width: 900px) {

            .rewards-grid,
            .steps-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .hero {
                min-height: 520px;
            }
        }

        @media (max-width: 650px) {

            .navbar {
                width: calc(100% - 24px);
                margin: 12px auto;
                padding: 11px 12px;
                border-radius: 15px;
            }

            .logo {
                width: 85px;
                height: 42px;
            }

            .status {
                display: none;
            }

            .hero {
                width: 90%;
                min-height: 520px;
                padding-top: 40px;
            }

            .hero h1 {
                letter-spacing: -1px;
            }

            .hero p {
                line-height: 1.7;
            }

            .cta-wrapper {
                width: 100%;
                flex-direction: column;
            }

            .claim-btn,
            .secondary-btn {
                width: 100%;
            }

            .rewards-grid,
            .steps-grid {
                grid-template-columns: 1fr;
            }

            .reward-card {
                min-height: auto;
            }

            .bottom-cta {
                padding: 40px 20px;
            }
        }

        @media (max-width: 400px) {

            .hero {
                min-height: 500px;
            }

            .badge {
                font-size: 10px;
                padding: 8px 12px;
            }

            .hero h1 {
                font-size: 34px;
            }

            .hero p {
                font-size: 14px;
            }
        }

        /* Accessibility */
        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                scroll-behavior: auto !important;
                transition-duration: 0.01ms !important;
            }
        }
    </style>
</head>

<body>

    <!-- Floating particles -->
    <div class="particles">
        <span class="particle"></span>
        <span class="particle"></span>
        <span class="particle"></span>
        <span class="particle"></span>
        <span class="particle"></span>
        <span class="particle"></span>
    </div>

    <!-- ==============================
         NAVBAR
    ============================== -->

    <nav class="navbar">

        <a href="#" class="logo">
            <img src="{{ asset('images/logo.jpg') }}" alt="BGMI Gift">
        </a>

        <div class="nav-right">

            <div class="status">
                <span class="status-dot"></span>
                Rewards Available
            </div>

            <button class="menu-btn" aria-label="Menu">
                <i class="fa-solid fa-bars"></i>
            </button>

        </div>

    </nav>


    <!-- ==============================
         HERO
    ============================== -->

    <main>

        <section class="hero">

            <div class="badge">
                <i class="fa-solid fa-gift"></i>
                Limited Time Rewards
            </div>

            <h1>
                Claim Your
                <span>Free Gifts</span>,
                Gamer!
            </h1>

            <p>
                Ready to level up your gaming experience?
                Grab your exclusive rewards and unlock exciting
                goodies. Your next reward is just one click away.
            </p>

            <div class="cta-wrapper">

                <a href="/choose" class="claim-btn">
                    <i class="fa-solid fa-gift"></i>
                    Claim Your Gift
                </a>

                <a href="#how-it-works" class="secondary-btn">
                    How It Works
                    <i class="fa-solid fa-arrow-down"></i>
                </a>

            </div>

        </section>


        <!-- ==============================
             REWARDS
        ============================== -->

        <section class="rewards-section" id="rewards">

            <div class="section-heading reveal">

                <h2>What's Waiting For You?</h2>

                <p>
                    Unlock rewards designed to make your gaming experience even better.
                </p>

            </div>

            <div class="rewards-grid">

                <div class="reward-card reveal">

                    <div class="reward-icon">
                        <i class="fa-solid fa-coins"></i>
                    </div>

                    <h3>Bonus Rewards</h3>

                    <p>
                        Get exciting bonus rewards and add something
                        special to your gaming inventory.
                    </p>

                </div>


                <div class="reward-card reveal">

                    <div class="reward-icon">
                        <i class="fa-solid fa-box-open"></i>
                    </div>

                    <h3>Exclusive Items</h3>

                    <p>
                        Discover exclusive items and surprises
                        available for a limited time.
                    </p>

                </div>


                <div class="reward-card reveal">

                    <div class="reward-icon">
                        <i class="fa-solid fa-fire"></i>
                    </div>

                    <h3>Special Bonuses</h3>

                    <p>
                        Don't miss special bonuses created for
                        gamers looking for something extra.
                    </p>

                </div>

            </div>

        </section>


        <!-- ==============================
             HOW IT WORKS
        ============================== -->

        <section class="steps" id="how-it-works">

            <div class="section-heading reveal">

                <h2>How It Works</h2>

                <p>
                    Getting your reward is quick and simple.
                </p>

            </div>

            <div class="steps-grid">

                <div class="step reveal">

                    <div class="step-number">01</div>

                    <h3>Choose Your Reward</h3>

                    <p>
                        Pick the reward you want from the available options.
                    </p>

                </div>


                <div class="step reveal">

                    <div class="step-number">02</div>

                    <h3>Verify Your Details</h3>

                    <p>
                        Follow the instructions to continue with your claim.
                    </p>

                </div>


                <div class="step reveal">

                    <div class="step-number">03</div>

                    <h3>Enjoy Your Gift</h3>

                    <p>
                        Complete the process and enjoy your new reward.
                    </p>

                </div>

            </div>

        </section>


        <!-- ==============================
             BOTTOM CTA
        ============================== -->

        <section class="bottom-cta">

            <h2>Ready To Claim?</h2>

            <p>
                Your reward is waiting. Don't wait too long —
                available rewards may change over time.
            </p>

            <a href="#rewards" class="claim-btn">
                <i class="fa-solid fa-bolt"></i>
                Get My Reward
            </a>

        </section>

    </main>


    <!-- ==============================
         FOOTER
    ============================== -->

    <footer>

        <p>
            © 2026 <span>BGMI Gift Center</span>.
            Play responsibly and enjoy the game.
        </p>

    </footer>


    <!-- Toast -->
    <div class="toast" id="toast">
        🎁 Your reward section is ready!
    </div>


    <script>

        /* =================================
           SCROLL REVEAL ANIMATION
        ================================= */

        const revealElements = document.querySelectorAll(".reveal");

        const observer = new IntersectionObserver(
            (entries, observer) => {

                entries.forEach((entry) => {

                    if (entry.isIntersecting) {

                        entry.target.classList.add("show");

                        observer.unobserve(entry.target);

                    }

                });

            },
            {
                threshold: 0.15
            }
        );

        revealElements.forEach((element) => {
            observer.observe(element);
        });


        /* =================================
           CLAIM BUTTON
        ================================= */

        const claimButtons = document.querySelectorAll(".claim-btn");
        const toast = document.getElementById("toast");

        claimButtons.forEach((button) => {

            button.addEventListener("click", () => {

                toast.classList.add("show");

                setTimeout(() => {
                    toast.classList.remove("show");
                }, 2500);

            });

        });


        /* =================================
           MOUSE PARALLAX EFFECT
        ================================= */

        const hero = document.querySelector(".hero");

        document.addEventListener("mousemove", (event) => {

            if (window.innerWidth < 700) return;

            const x =
                (window.innerWidth / 2 - event.clientX) / 80;

            const y =
                (window.innerHeight / 2 - event.clientY) / 80;

            hero.style.transform =
                `translate(${x}px, ${y}px)`;

        });

    </script>

</body>

</html>