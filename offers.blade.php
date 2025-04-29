<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offers - Miracle Beauty Care</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
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
            height: 100vh;
            width: 100%;
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

        .title {
            font-size: 2.5rem;
            letter-spacing: 3px;
            color:#143b46;
            font-weight: 600;
            margin-top: 15px;
            margin-bottom: 5px;
        }

        .offers-section {
            margin-top: 120px;
            margin-bottom: 100px;
        }
        
        .section-subtitle {
            font-size: 1rem;
            letter-spacing: 3px;
            color:#143b46;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .offers-section .offer-card {
            background-color: #f8f4fc;
            border: 1px solid #e5d5f7;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            padding: 20px;
        }

        .offers-section .offer-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .offers-section .card-title {
            font-size: 2rem;
            color:rgb(113, 40, 185);
            margin-top: 15px;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .offers-section .card-text {
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 15px;
        }

        .offers-section .card-price {
            font-size: 2rem;
            color:rgb(121, 85, 157);
            margin-bottom: 15px;
            font-weight: 600;
        }

        .image img {
            width: 370px;
            height: 330px;
            object-fit: cover;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
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

<!-- Offers at the moment--> 
<div class="container my-5 offers-section">
<div class="section">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h2 class="title">Specials at the moment</h2>
            <p class="subtitle">Offers & Packages that can rejuvinate your soul, body and mind!</p>
        </div>

        <div class="row justify-content-center">
        <!-- Offer 1 -->
        <div class="col-md-4 col-sm-6 mb-4 d-flex">
            <div class="card offer-card h-100 text-center">
                <div class="card-body">
                    <div class="image">
                        <img src="{{ asset('images/offer1.jpg') }}" alt="facial" class="img-fluid rounded">
                    </div>
                    <h5 class="card-title">Glow Package</h5>
                    <p class="card-text">A rejuvenating combo experience that brings out glow and freshness in your skin. 
                        Includes Hair Spa, facial, manicure and free eyebrow threading.</p>
                    <h6 class="card-price">@Rs.2082</h6>
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-primary px-5 py-2" style="background-color: rgb(41, 14, 68); border: none;">Book Now</a>
                </div>
            </div>
        </div>
        <!-- Offer 2 -->
        <div class="col-md-4 col-sm-6 mb-4 d-flex">
            <div class="card offer-card h-100 text-center">
                <div class="card-body">
                    <div class="image">
                        <img src="{{ asset('images/offer2.jpg') }}" alt="Mani" class="img-fluid rounded">
                    </div>
                    <h5 class="card-title">Luxury Mani-Pedi</h5>
                    <p class="card-text">Pamper your hands and feet with our most loved manicure and pedicure combo with gel finish.</p>
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-primary px-5 py-2" style="background-color: rgb(41, 14, 68); border: none;">Book Now</a>
                </div>
            </div>
        </div> 
        <!-- Offer 3 -->
        <div class="col-md-4 col-sm-6 mb-4 d-flex">
            <div class="card offer-card h-100 text-center">
                <div class="card-body">
                    <div class="image">
                        <img src="{{ asset('images/Hairspa.jpg') }}" alt="spa" class="img-fluid rounded">
                    </div>
                    <h5 class="card-title">Herbal Hair Spa</h5>
                    <p class="card-text">Nourish your hair with a blend of natural herbs and oils. Perfect for damaged and dry hair.</p>
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-primary px-5 py-2" style="background-color: rgb(41, 14, 68); border: none;">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Monthly Offers --> 
<div class="container my-5 offers-section">
<div class="section">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h2 class="title">Offers for a month</h2>
            <p class="subtitle">Offers for a whole Baisakh month!</p>
        </div>

        <div class="row justify-content-center">
        <!-- Offer 1 -->
        <div class="col-md-4 col-sm-6 mb-4 d-flex">
            <div class="card offer-card h-100 text-center">
                <div class="card-body">
                    <div class="image">
                        <img src="{{ asset('images/offer2.jpg') }}" alt="facial" class="img-fluid rounded">
                    </div>
                    <h5 class="card-title">Fruit-Power Facial</h5>
                    <p class="card-text">A rejuvenating facial experience that brings out glow and freshness in your skin. Includes deep cleansing, exfoliation and hydration.</p>
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-primary px-5 py-2" style="background-color: rgb(41, 14, 68); border: none;">Book Now</a>
                </div>
            </div>
        </div>
        <!-- Offer 2 -->
        <div class="col-md-4 col-sm-6 mb-4 d-flex">
            <div class="card offer-card h-100 text-center">
                <div class="card-body">
                    <div class="image">
                        <img src="{{ asset('images/mani.jpg') }}" alt="Mani" class="img-fluid rounded">
                    </div>
                    <h5 class="card-title">Luxury Mani-Pedi</h5>
                    <p class="card-text">Pamper your hands and feet with our most loved manicure and pedicure combo with gel finish.</p>
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-primary px-5 py-2" style="background-color: rgb(41, 14, 68); border: none;">Book Now</a>
                </div>
            </div>
        </div>
        <!-- Offer 3 -->
        <div class="col-md-4 col-sm-6 mb-4 d-flex">
            <div class="card offer-card h-100 text-center">
                <div class="card-body">
                    <div class="image">
                        <img src="{{ asset('images/Hairspa.jpg') }}" alt="spa" class="img-fluid rounded">
                    </div>
                    <h5 class="card-title">Herbal Hair Spa</h5>
                    <p class="card-text">Nourish your hair with a blend of natural herbs and oils. Perfect for damaged and dry hair.</p>
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-primary px-5 py-2" style="background-color: rgb(41, 14, 68); border: none;">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Popular Offers --> 
<div class="container my-5 offers-section">
<div class="section">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h2 class="title">Our Most Populars</h2>
            <p class="subtitle">All-time customer favorites and widely booked offers & packages</p>
        </div>

        <div class="row justify-content-center">
        <!-- Offer 1 -->
        <div class="col-md-4 col-sm-6 mb-4 d-flex">
            <div class="card offer-card h-100 text-center">
                <div class="card-body">
                    <div class="image">
                        <img src="{{ asset('images/offer3.jpg') }}" alt="facial" class="img-fluid rounded">
                    </div>
                    <h5 class="card-title">Fruit-Power Facial</h5>
                    <p class="card-text">A rejuvenating facial experience that brings out glow and freshness in your skin. Includes deep cleansing, exfoliation and hydration.</p>
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-primary px-5 py-2" style="background-color: rgb(41, 14, 68); border: none;">Book Now</a>
                </div>
            </div>
        </div>
        <!-- Offer 2 -->
        <div class="col-md-4 col-sm-6 mb-4 d-flex">
            <div class="card offer-card h-100 text-center">
                <div class="card-body">
                    <div class="image">
                        <img src="{{ asset('images/mani.jpg') }}" alt="Mani" class="img-fluid rounded">
                    </div>
                    <h5 class="card-title">Luxury Mani-Pedi</h5>
                    <p class="card-text">Pamper your hands and feet with our most loved manicure and pedicure combo with gel finish.</p>
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-primary px-5 py-2" style="background-color: rgb(41, 14, 68); border: none;">Book Now</a>
                </div>
            </div>
        </div>
        <!-- Offer 3 -->
        <div class="col-md-4 col-sm-6 mb-4 d-flex">
            <div class="card offer-card h-100 text-center">
                <div class="card-body">
                    <div class="image">
                        <img src="{{ asset('images/Hairspa.jpg') }}" alt="spa" class="img-fluid rounded">
                    </div>
                    <h5 class="card-title">Herbal Hair Spa</h5>
                    <p class="card-text">Nourish your hair with a blend of natural herbs and oils. Perfect for damaged and dry hair.</p>
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-primary px-5 py-2" style="background-color: rgb(41, 14, 68); border: none;">Book Now</a>
                </div>
            </div>
        </div>
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