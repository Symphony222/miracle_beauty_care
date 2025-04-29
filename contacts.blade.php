<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts - Miracle Beauty Care</title>
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
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 20px;
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

        .image-1 {
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            height: auto;
        }

        .title {
            font-size: 2.5rem;
            letter-spacing: 3px;
            color:#143b46;
            font-weight: 600;
            margin-top: 15px;
            margin-bottom: 15px;
        }
        
        .section-subtitle {
            font-size: 1rem;
            letter-spacing: 3px;
            color:#143b46;
            font-weight: 600;
            margin-bottom: 15px;
        }

        :root {
            --primary:#e8ddff;
            --primary-light:rgb(253, 229, 248);
            --gold:rgb(224, 248, 255);
            --dark: #143b46;
        }
        
        .contact-grid {
            margin-top: 5px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }
        
        .contact-info {
            margin-top: 5px;
            padding: 25px;
            position: relative;
            overflow: hidden;
        }
        
        .contact-info::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(to bottom, var(--dark), var(--gold));
        }

        .social-media-links {
            margin-top: 5px;
            margin-left: 35px;
            display: flex;
            gap: 20px; /* Adds space between icons */
        }

        .social-link {
            color: #333; /* Default color */
            font-size: 20px; /* Icon size */
            transition: transform 0.3s ease, color 0.3s ease;
        }

        .social-link:hover {
            color:rgb(185, 87, 250); /* Hover color (adjust to your theme) */
            transform: scale(1.2); /* Slightly enlarges on hover */
        }
        
        .booking-form {
            position: relative;
            background: #ffffff;
            width: 100%;
            max-width: 800px;
            margin: 50px auto;
            margin-left: 50vh;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .form-title {
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
            color: #333;
        }

        .row {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .col-md-6 {
            flex: 1;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-label {
            margin-top: 15px;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .form-control {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        .btn-submit {
            background-color:rgb(195, 124, 246);
            color: white;
            padding: 12px 30px;
            border: none;
            margin-top: 15px;
            border-radius: 25px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color:rgb(168, 86, 245);
        }

        
        .info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
            margin-left: 30px;
        }
        
        .info-icon {
            background: var(--primary);
            color: rgba(12, 10, 17, 0.2);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }
        
        .info-content h4 {
            margin: 0 0 5px 0;
            color: var(--dark);
        }
        
        .info-content p {
            margin: 0;
            color: #666;
        }
        
        .map-container {
            width: auto;
            height: 600px;
            border-radius: 10px;
            overflow: hidden;
            margin-top: 15px;
            margin-left: 40px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }
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
        
        <!-- Social Media Links -->
            <div class="d-flex justify-content-right">
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
    </div>
        

    <!-- Main Content -->
    <div class="contact-container">
        <div class="contact-grid">
            <div class="map-container section">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.123456789012!2d85.3375393!3d27.7387689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb193650147e5f%3A0x7d77b2083de65dd3!2sMiracle%20Beauty%20Care!5e0!3m2!1sen!2snp!4v1712345678901!5m2!1sen!2snp" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
            <!-- Contact Information -->
            <div class="contact-info section">
                <h2 class="title">Contact Details</h2>
                <div class="info-item section">
                    <div class="info-icon">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <div class="info-content">
                        <h4>Location</h4>
                        <p>Lamatangin Marg, Maharajgunj, Kathmandu, Nepal</p>
                    </div>
                </div>
                
                <div class="info-item section">
                    <div class="info-icon">
                        <i class="bi bi-clock"></i>
                    </div>
                    <div class="info-content">
                        <h4>Opening Hours</h4>
                        <p>Monday - Sunday: 10:00 AM - 6:00 PM</p>
                    </div>
                </div>
                
                <div class="info-item section">
                    <div class="info-icon">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <div class="info-content">
                        <h4>Phone Numbers</h4>
                        <p>+977-9813037498<br>+977-9701785588</p>
                    </div>
                </div>
                
                <div class="info-item section">
                    <div class="info-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <div class="info-content">
                        <h4>Email</h4>
                        <p>miraclebeautycarenp@gmail.com</p>
                    </div>
                </div>
            </div>
            
            <!-- Booking Form -->
            <div class="booking-form section">
                <h2 class="form-title">Book an Appointment</h2>

                <form method="POST" action="{{ route('appointments.store') }}">
                    @csrf

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="form-label" for="name">Name</label>
                            <input class="form-control" type="text" id="name" name="name" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="form-label" for="email">Email</label>
                            <input class="form-control" type="email" id="email" name="email" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="form-label" for="phone">Phone</label>
                            <input class="form-control" type="text" id="phone" name="phone" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="form-label" for="service">Service</label>
                            <select class="form-control" id="service" name="service" required>
                                <option value="">Select Service</option>
                                <option value="Facial">Facial</option>
                                <option value="Haircut">Haircut</option>
                                <option value="Makeup">Makeup</option>
                                <option value="Massage">Massage</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="date">Preferred Date</label>
                        <input class="form-control" type="date" id="date" name="date" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="message">Additional Message (Optional)</label>
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Write any special requests here..."></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="paymentMethod">Select Payment Method</label>
                        <select id="paymentMethod" name="payment_method" required>
                            <option value="">Choose Payment Method</option>
                            <option value="esewa">eSewa</option>
                            <option value="khalti">Khalti</option>
                            <option value="cash">Cash on Arrival</option>
                        </select>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn-submit">Book Now</button>
                    </div>
                </form>
            </div>
    </div>
    <footer class="py-4 mt-5 text-center">
        <p>MiracleBeautyCare © 2025 | All Rights Reserved.</p>
    </footer>

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

    <script>
        document.getElementById('appointmentForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Form validation
            const name = document.getElementById('name').value;
            const phone = document.getElementById('phone').value;
            const date = document.getElementById('date').value;
            const time = document.getElementById('time').value;
            const service = document.getElementById('service').value;
            
            if (!name || !phone || !date || !time || !service) {
                alert('Please fill in all required fields');
                return;
            }
            
            // In a real implementation, you would send this data to your server
            console.log('Appointment booked:', {
                name,
                phone,
                email: document.getElementById('email').value,
                date,
                time,
                service,
                message: document.getElementById('message').value,
                payment: {
                    amount: document.getElementById('amount').value,
                    method: document.getElementById('payment-method').value
                }
            });
            
            alert('Your appointment has been booked successfully! We will contact you shortly to confirm.');
            this.reset();
        });
    </script>
</body>
</html>