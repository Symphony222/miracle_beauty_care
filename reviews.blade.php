<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews - Miracle Beauty Care</title>
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

        .review-hero {
            background: linear-gradient(135deg,rgb(255, 233, 244) 0%, #eee5fd 100%);
            padding: 80px 0;
            margin-bottom: 60px;
            border: 1px solid black;
            text-align: center;
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
            height: auto;
            opacity: 70%;
            object-fit: cover;
            object-position: right;
        }
        
        .review-platform {
            padding: 30px;
            margin-bottom: 30px;
        }
        
        .platform-logo {
            height: 40px;
            margin-bottom: 20px;
        }
        
        .rating-badge {
            background: #28a745;
            color: white;
            padding: 5px 15px;
            border-radius: 50px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 15px;
        }
        
        .review-form {
            padding: 40px;
        }
        
        .form-control {
            border: 1px solid #e9d8ff;
            padding: 12px 15px;
            border-radius: 10px;
        }
        
        .submit-btn {
            background: #975be3;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .submit-btn:hover {
            background: #7a3aed;
            transform: translateY(-3px);
        }

        .social-media-links {
            margin-top: 15px;
            display: flex;
            gap: 30px; /* Adds space between icons */
        }

        .social-link {
            color: #333; /* Default color */
            font-size: 30px; /* Icon size */
            transition: transform 0.3s ease, color 0.3s ease;
        }

        .social-link:hover {
            color:rgb(185, 87, 250); /* Hover color (adjust to your theme) */
            transform: scale(1.2); /* Slightly enlarges on hover */
        }

        /* Google Reviews Styling */
        .google-reviews {
            max-width: 2000px;
            margin: 0;
            margin-left: 30vh;
            justify-content: center;
            text-align: center;
        }

        .review-item {
            padding: 20px;
            margin-bottom: 15px;
        }

        .review-stars {
            color: #FFB400; /* Gold color for stars */
            font-size: 1.2rem;
            margin: 5px 0;
        }

        .review-author {
            font-weight: bold;
        }

        .review-text {
            color:rgb(184, 144, 248);
            line-height: 1.5;
        }

        /* TripAdvisor Review Widget */
        .tripadvisor-review-widget {
            max-width: 500px;
            border-radius: 12px;
            padding: 45px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            font-family: 'Montserrat', sans-serif;
            margin: 20px auto;
            border: 1px solid #e0e0e0;
        }
        
        .tripadvisor-header {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .tripadvisor-logo {
            height: 60px;
            margin-bottom: 20px;
        }
        
        .tripadvisor-header h3 {
            color: #333;
            font-size: 1.2rem;
            margin-top: 20px;
        }
        
        .rating-section {
            text-align: center;
            margin: 10px 0;
        }
        
        .stars-container {
            font-size: 3rem;
            letter-spacing: 5px;
            color: #ccc;
            margin-bottom: 5px;
            cursor: pointer;
        }
        
        .stars-container .star {
            transition: all 0.2s ease;
        }
        
        .stars-container .star:hover,
        .stars-container .star.active {
            color: #34E0A1;
        }
        
        .rating-section small {
            color: #666;
            font-size: 1.5rem;
        }
        
        .review-input textarea {
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 12px;
            min-height: 80px;
            resize: vertical;
            font-family: inherit;
            transition: border 0.3s ease;
        }
        
        .review-input textarea:focus {
            outline: none;
            border-color: #00a680;
        }
        
        .submit-btn {
            background:rgb(245, 245, 245);
            color: black;
            border: none;
            padding: 12px 25px;
            border-radius: 50px;
            width: 100%;
            font-weight: 400;
            margin-top: 15vh;
            margin-bottom: 15vh;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .submit-btn:hover {
            background:rgb(200, 171, 247);
            color: white;
            transform: translateY(-2px);
        }
        
        .tripadvisor-footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 15px;
            border-top: 1px solid #eee;
        }
        
        .tripadvisor-footer small {
            color: #666;
            font-size: 2rem;
        }
        
        .tripadvisor-footer img {
            vertical-align: middle;
            margin-left: 5px;
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
                <div class="hero-image">
                    <img src="/images/hair.png">
                </div>
            </section>

    <!-- Reviews Section -->
    <div class="container py-9">
        <div class="row">
            <!-- Google Reviews -->
            <div class="col-md-9 section" data-aos="fade-up">
                <div class="review-platform text-center">
                    <div class="google-reviews">
                        <script src="https://static.elfsight.com/platform/platform.js" async></script>
                        <div class="elfsight-app-f66c8a57-6892-4632-bd31-612cc4f9f582" data-elfsight-app-lazy></div>
                    </div>
                    <a href="https://search.google.com/local/writereview?placeid=ChIJX34UUDYZ6zkR013mPQiyd30" 
                        target="_blank" 
                        class="btn btn-primary">
                        Leave a Google Review!
                    </a>
                </div>
            </div>

            <section class="before-after-gallery container my-5">
                <div class="container section">
                    <h2 class="text-2xl font-bold mb-4">Our Clients' Transformations!</h2>

                    <div class="row">
                        @forelse ($galleryImages as $image)
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <div class="card-header">{{ $image->name ?? 'Gallery Image' }}</div>
                                    <div class="card-body">
                                        <div class="before-after">
                                            <div class="mb-2">
                                                <p class="small text-muted">Before</p>
                                                <img src="{{ asset('storage/' . $image->before_image) }}" alt="Before" class="img-fluid">
                                            </div>
                                            <div>
                                                <p class="small text-muted">After</p>
                                                <img src="{{ asset('storage/' . $image->after_image) }}" alt="After" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <p class="text-center text-muted">No transformation images available yet. Check back soon!</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </section>

            
            <!-- Tripadvisor Reviews -->
            <div class="tripadvisor-review-widget section">
                <div class="tripadvisor-header">
                    <img src="https://static.tacdn.com/img2/brand_refresh/Tripadvisor_logoset_solid_green.svg" alt="TripAdvisor" class="tripadvisor-logo">
                    <h3>Visited Miracle Beauty Care? Give us a review!</h3>
                </div>
            
                <div class="rating-section">
                    <div class="stars-container">
                    <span class="star" data-value="1">○</span>
                    <span class="star" data-value="2">○</span>
                    <span class="star" data-value="3">○</span>
                    <span class="star" data-value="4">○</span>
                    <span class="star" data-value="5">○</span>
                    </div>
                    <small>Click to rate</small>
                </div>
                
                <div class="review-input">
                    <textarea placeholder="Describe your experience..."></textarea>
                </div>
                
                    <a href="https://www.tripadvisor.com/UserReview-g293890-d32698107-Miracle_Beauty_Care-Kathmandu_Bagmati_Zone_Central_Region.html" target="_blank" class="submit-btn">
                    Continue to Review
                    </a>
                
                <div class="tripadvisor-footer">
                    <img src="https://static.tacdn.com/img2/brand_refresh/Tripadvisor_lockup_horizontal_secondary_registered.svg" alt="TripAdvisor" width="100">
                </div>
            </div>

            <!-- tripadvisor -->
            <script>
            // Star Rating Functionality
                document.querySelectorAll('.star').forEach(star => {
                    star.addEventListener('click', function() {
                        const value = parseInt(this.getAttribute('data-value'));
                        const stars = document.querySelectorAll('.star');
                        
                        // Update visual state
                        stars.forEach((s, index) => {
                            if (index < value) {
                                s.classList.add('active');
                                s.textContent = '●'; // Filled circle
                            } else {
                                s.classList.remove('active');
                                s.textContent = '○'; // Empty circle
                            }
                        });
                        
                        // Store the rating value
                        document.getElementById('selected-rating').value = value;
                        
                        // Enable the submit button if rating is selected
                        document.querySelector('.submit-btn').classList.add('active');
                    });
                });

                // Add validation before redirecting
                document.querySelector('.submit-btn').addEventListener('click', function(e) {
                    const rating = document.getElementById('selected-rating').value;
                    const reviewText = document.querySelector('.review-input textarea').value;
                    
                    if (!rating) {
                        e.preventDefault();
                        alert('Please select a rating before continuing.');
                    }
                });

            </script>

    <!-- Social Media Links -->
    <div class="container text-center py-5 section" >
        <h4 class="mb-4">Follow Us</h4>
        <div class="d-flex justify-content-center">
            <div class="social-media-links">
                <a href="https://www.facebook.com/share/1FLZQAgstP/?mibextid=wwXIfr" target="_blank" class="social-link">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://www.instagram.com/miraclebeautycare.np/" target="_blank" class="social-link">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="https://g.co/kgs/igjKrmc" target="_blank" class="social-link">
                    <i class="bi bi-google"></i>
                <a href="https://www.tiktok.com/@miraclebeautycare_np" target="_blank" class="social-link">
                    <i class="bi bi-tiktok"></i>
                </a>
            </div>
        </div>
    </div>

        <footer class="py-4 mt-5 text-center">
            <p>MiracleBeautyCare © 2025 | All Rights Reserved.</p>
        </footer>
    </div>

    <!-- Scripts for Review Platforms -->
    <script src="https://www.jscache.com/wejs?wtype=cdswritereviewnew&uniq=284&locationId=YOUR_LOCATION_ID&lang=en_US&border=true&shadow=true&display_version=2"></script>

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
</body>
</html>