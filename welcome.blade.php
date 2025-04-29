<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miracle Beauty Care</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
        }
        
        body {
            background-color: #EEE5FD;
            color: #333;
            line-height: 1.6;
        }
        
        .main-container {
            position: relative;
            height: 100vh;
            width: 100%;
            overflow: hidden;
        }
        
        .content-wrapper {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0;
            position: relative;
        }
        
        header {
            z-index: 2;
            position: relative;
            padding: 20px 40px;
        }

        .footer {
            position: absolute;
            bottom: -50px;
            z-index: 2;
            font-size: 15px;
            color: #333;
        }
        
        nav {
            display: flex;
            align-items: center;
        }
        
        .logo {
            margin-right: 60px;
        }
        
        .logo img {
            height: 150px;
        }
        
        .nav-links {
            display: flex;
            gap: 40px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color:rgb(166, 87, 245);
        }

        .section {
            margin: 40px 0;
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .section.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .hero {
            z-index: 1;
            position: relative;
            display: flex;
            padding: 40px;
            height: 100vh;
            width: 90%;
        }
        
        .hero-content {
            text-align: center;
            width: 70%;
            padding: 20px 0 20px 0;
            margin-top: -200px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .hero-image {
            position: absolute;
            right: -60vh;
            top: -35vh;
            width: 77%;
            height: auto;
            overflow: hidden;
        }
        
        .hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: right;
        }
        
        .hero h1 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #333;
            line-height: 1.2;
        }
        
        .hero p {
            font-size: 18px;
            color: #666;
            margin-bottom: 40px;
        }
        
        .btn {
            display: flex;
            flex-direction: column;
            margin: 20px auto 0 auto;
            border: 2px solid #333;
            color: #333;
            background: transparent;
            padding: 12px 30px;
            border-radius: 0;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            width: fit-content;
        }
        
        .btn:hover {
            background-color:rgb(144, 157, 149);
            color: white;
        }
    </style>
</head>
<body>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/680dafe9540516190e2e5046/1ipqnead1';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>

    <!-- Navigation -->   
    <div class="main-container">
        <div class="section">
            <div class="content-wrapper">
                <header>
                    <nav>
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('images/logo.png') }}" style="height: 150px; width: auto;">
                    </a>
                        <div class="nav-links">
                            <a href="{{ route('aboutus') }}">About Us</a>
                            <a href="{{ route('services') }}">Services</a>
                            <a href="{{ route('quiz') }}">Take a Quiz</a>
                            <a href="{{ route('reviews') }}">Reviews</a>
                            <a href="{{ route('offers') }}">Offers</a>
                            <a href="{{ route('contacts') }}">Contacts</a>
                            <a href="{{ route('login') }}">LogIn</a>
                        </div>
                    </nav>
                </header>   
            
            <section class="hero">
                <div class="hero-content section">
                    <h1>Elevating beauty with expertise, care and a touch of perfection!</h1>
                    <p>Experience world-class hair, skin, nail, body and beauty services</p>
                    <a href="#" class="btn">Book an appointment</a>
                </div>
                <div class="hero-image">
                    <img src="/images/homepage.png">
                </div>
            </section>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('.section');
            
            function checkScroll() {
                sections.forEach(section => {
                    const sectionTop = section.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    
                    if (sectionTop < windowHeight * 0.75) {
                        section.classList.add('visible');
                    }
                });
            }
            
            // Check on load
            checkScroll();
            
            // Check on scroll
            window.addEventListener('scroll', checkScroll);
        });
    </script>
    <footer class="py-4 mt-5 text-center">
        <p>MiracleBeautyCare © 2025 | All Rights Reserved.</p>
    </footer>
</body>
</html>