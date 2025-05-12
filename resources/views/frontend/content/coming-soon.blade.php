<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon - Samaira Skills</title>
    <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/samaira-skills/fav-icon.svg" type="image/svg">
    
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/samaira-skill.css" rel="stylesheet">

    <style>
        .coming-soon-section {
            min-height: 100vh;
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
            position: relative;
            overflow: hidden;
        }

        .coming-soon-section::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 60%);
            animation: rotate 30s linear infinite;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .coming-soon-content {
            position: relative;
            z-index: 1;
            padding: 100px 0;
        }

        .logo-area {
            margin-bottom: 50px;
        }

        .logo-area img {
            max-width: 180px;
            height: auto;
        }

        .coming-soon-title {
            font-size: 3.5rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .coming-soon-subtitle {
            font-size: 1.2rem;
            color: #fff;
            opacity: 0.8;
            margin-bottom: 50px;
        }

        .countdown-timer {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 50px;
        }

        .countdown-item {
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 15px;
            min-width: 120px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .countdown-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 5px;
        }

        .countdown-label {
            font-size: 0.9rem;
            color: #fff;
            opacity: 0.7;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .newsletter-form {
            max-width: 500px;
            margin: 0 auto;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #fff;
            padding: 15px 25px;
            border-radius: 30px;
            font-size: 1rem;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
            color: #fff;
            box-shadow: none;
        }

        .subscribe-btn {
            background: linear-gradient(45deg, #FF6B6B, #FF8E53);
            border: none;
            padding: 15px 35px;
            border-radius: 30px;
            color: #fff;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .subscribe-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.4);
        }

        .social-links {
            margin-top: 50px;
        }

        .social-links a {
            color: #fff;
            font-size: 1.2rem;
            margin: 0 15px;
            opacity: 0.7;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            opacity: 1;
            transform: translateY(-3px);
        }

        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
        }

        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            animation: float 15s infinite linear;
        }

        .shape:nth-child(1) {
            width: 100px;
            height: 100px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 150px;
            height: 150px;
            top: 60%;
            right: 10%;
            animation-delay: -5s;
        }

        .shape:nth-child(3) {
            width: 80px;
            height: 80px;
            bottom: 20%;
            left: 20%;
            animation-delay: -10s;
        }

        @keyframes float {
            0% { transform: translate(0, 0) rotate(0deg); }
            50% { transform: translate(20px, 20px) rotate(180deg); }
            100% { transform: translate(0, 0) rotate(360deg); }
        }

        @media (max-width: 768px) {
            .coming-soon-title {
                font-size: 2.5rem;
            }

            .countdown-timer {
                gap: 15px;
            }

            .countdown-item {
                min-width: 90px;
                padding: 15px;
            }

            .countdown-number {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <section class="coming-soon-section">
        <!-- Floating Shapes -->
        <div class="floating-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>

        <div class="container">
            <div class="coming-soon-content text-center">
                <!-- Logo -->
                <div class="logo-area">
                    <img src="{{ asset('assets/frontassets/') }}/images/logo.png" alt="Samaira Skills Logo">
                </div>

                <!-- Title -->
                <h1 class="coming-soon-title">Coming Soon</h1>
                <p class="coming-soon-subtitle">We're working hard to bring you something amazing. Stay tuned!</p>

                <!-- Countdown Timer -->
                {{-- <div class="countdown-timer">
                    <div class="countdown-item">
                        <div class="countdown-number" id="days">20</div>
                        <div class="countdown-label">Days</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-number" id="hours">23</div>
                        <div class="countdown-label">Hours</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-number" id="minutes">59</div>
                        <div class="countdown-label">Minutes</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-number" id="seconds">00</div>
                        <div class="countdown-label">Seconds</div>
                    </div>
                </div> --}}

                <!-- Newsletter Form -->
                <div class="newsletter-form">
                    <form>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Enter your email address" required>
                            <button type="submit" class="subscribe-btn">Notify Me</button>
                        </div>
                    </form>
                </div>

                <!-- Social Links -->
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="{{ asset('assets/frontassets/') }}/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/frontassets/') }}/js/bootstrap.bundle.min.js"></script>

    <!-- Countdown Timer Script -->
    <script>
        // Set the launch date (change this to your desired date)
        const launchDate = new Date('2024-12-31T23:59:59').getTime();

        // Update the countdown every second
        const countdown = setInterval(function() {
            const now = new Date().getTime();
            const distance = launchDate - now;

            // Calculate days, hours, minutes, and seconds
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the results
            document.getElementById('days').innerHTML = days.toString().padStart(2, '0');
            document.getElementById('hours').innerHTML = hours.toString().padStart(2, '0');
            document.getElementById('minutes').innerHTML = minutes.toString().padStart(2, '0');
            document.getElementById('seconds').innerHTML = seconds.toString().padStart(2, '0');

            // If the countdown is finished
            if (distance < 0) {
                clearInterval(countdown);
                document.getElementById('days').innerHTML = '20';
                document.getElementById('hours').innerHTML = '23';
                document.getElementById('minutes').innerHTML = '59';
                document.getElementById('seconds').innerHTML = '00';
            }
        }, 1000);
    </script>
</body>
</html>
