<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Miracle Beauty Care</title>
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
        
        .introduction {
            margin-top: 60px;
            margin-bottom: 120px;
        }
        
        .intro-heading {
            font-style: italic;
            margin-bottom: 20px;
            font-size: 2.5rem;
        }

        .social-media-links {
            margin-top: 20px;
            display: flex;
            gap: 15px; /* Adds space between icons */
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
        
        .image-1 {
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            height: auto;
        }
        
        .image-2 {
            position: absolute;
            bottom: -100px;
            left: -7vh;
            width: 400px;
        }

        .vision-section {
            position: relative;
        }

        .goal-section {
            position: relative;
            margin-top: 40px;
        }

        .decorative-image {
            position: absolute;
            left: -10vh;
            bottom: -50vh;
            opacity: 100;
            width: 420px;
            pointer-events: none;
        }
 
        .mission-vision-goal {
            margin-top: 120px;
            margin-bottom: 200px;
        }

        
        @media (max-width: 768px) {
            .image-2 {
                width: 200px;
                bottom: -50px;
            }
            
            .section {
                margin: 40px 0;
            }
            
            .introduction {
                margin-top: 30px;
                margin-bottom: 60px;
            }
        }

            .main-section {
            margin-top: 100px;
            margin-bottom: 120px;
        }
        
        .title {
            font-size: 2rem;
            letter-spacing: 3px;
            color:#143b46;
            font-weight: 600;
            margin-top: 15px;
            margin-bottom: 10px;
        }
        
        .founder-image-container {
            position: relative;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }
        
        .founder-quote {
            position: absolute;
            text-align: center;
            color:rgb(77, 43, 98);
            opacity: 70%;
            font-size: 1.5rem;
            font-weight: 600;
            margin-top: -30px;
            margin-bottom: 5px;
        }
        
        
        .founder-info {
            padding: 0;
            margin: 0 auto;
            text-align: left;
        }

        
        .founder-name {
            color:rgb(5, 22, 53);
            font-size: 3rem;
            font-weight: 600;
            margin-top: 100px;
            margin-bottom: 5px;
        }
        
        .subtitle {
            color:#143b46;
            font-style: italic;
            margin-bottom: 15px;
        }
        
        .founder-divider {
            height: 2px;
            width: auto;
            background-color:rgb(218, 182, 251);
            margin-bottom: 20px;
        }
        
        .founder-credentials {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            margin-bottom: 15px;
        }
        
        .founder-credentials span {
            background-color: #f8f4fc;
            border: 1px solid #e5d5f7;
            color:rgb(117, 33, 151);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
        }
        
        @media (max-width: 991px) {
            .founder-info {
                padding: 20px 0;
                text-align: center;
            }
            
            .founder-divider {
                margin: 0 auto 20px;
            }
            
            .founder-credentials {
                justify-content: center;
            }

        }
            .our-team-section {
            margin-top: 120px;
            margin-bottom: 100px;
        }
        
        .section-subtitle {
            font-size: 1rem;
            letter-spacing: 3px;
            color:#143b46;
            font-weight: 600;
            margin-bottom: 40px;
        }
        
        .team-member {
            background-color: #D4DBD7;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }
        
        .team-member:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        .member-image img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        
        .member-name {
            color: #333;
            margin-bottom: 5px;
            font-weight: 600;
        }
        
        .member-title {
            color:rgb(113, 40, 185);
            font-style: italic;
            margin-bottom: 15px;
        }
        
        .member-description {
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 15px;
        }

        .popular-offers-section .offer-card {
            background-color: #f8f4fc;
            border: 1px solid #e5d5f7;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            padding: 20px;
        }

        .popular-offers-section .offer-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .popular-offers-section .card-title {
            color:rgb(113, 40, 185);
            margin-bottom: 15px;
            font-weight: 600;
        }

        .popular-offers-section .card-text {
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 15px;
        }

        .ps-image img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .chat-widget {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 9999;
            font-family: 'Montserrat', sans-serif;
        }

        .chat-toggle {
            width: 60px;
            height: 60px;
            background-color: rgb(166, 87, 245);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .chat-toggle:hover {
            transform: scale(1.05);
        }

        .chat-toggle i {
            color: white;
            font-size: 24px;
        }

        .chat-box {
            position: fixed;
            bottom: 90px;
            right: 20px;
            width: 350px;
            height: 450px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
            display: none;
            flex-direction: column;
            overflow: hidden;
        }

        .chat-header {
            background-color: rgb(166, 87, 245);
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .chat-header h4 {
            margin: 0;
            font-weight: 600;
        }

        .close-chat {
            background: none;
            border: none;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }

        .chat-body {
            flex: 1;
            padding: 15px;
            overflow-y: auto;
            background-color: #f8f4fc;
        }

        .chat-message {
            margin-bottom: 15px;
            max-width: 80%;
            padding: 10px;
            border-radius: 15px;
        }

        .user-message {
            background-color: #e5d5f7;
            margin-left: auto;
            border-bottom-right-radius: 5px;
        }

        .admin-message {
            background-color: white;
            border-bottom-left-radius: 5px;
        }

        .chat-input {
            display: flex;
            padding: 10px;
            border-top: 1px solid #e5e5e5;
        }

        .message-input {
            flex: 1;
            padding: 10px;
            border: 1px solid #e5e5e5;
            border-radius: 20px;
            outline: none;
            margin-right: 10px;
        }

        .send-button {
            background-color: rgb(166, 87, 245);
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .chat-welcome {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
            color: #666;
        }

        .typing-indicator {
            padding: 10px;
            background-color: white;
            border-radius: 15px;
            border-bottom-left-radius: 5px;
            width: fit-content;
            margin-bottom: 15px;
            display: none;
        }

        .typing-indicator span {
            height: 8px;
            width: 8px;
            float: left;
            margin: 0 1px;
            background-color: #9e9ea1;
            display: block;
            border-radius: 50%;
            opacity: 0.4;
        }

        .typing-indicator span:nth-of-type(1) {
            animation: typing 1s infinite 0s;
        }

        .typing-indicator span:nth-of-type(2) {
            animation: typing 1s infinite 0.2s;
        }

        .typing-indicator span:nth-of-type(3) {
            animation: typing 1s infinite 0.4s;
        }

        @keyframes typing {
            0% {
                transform: translateY(0px);
                background-color: #9e9ea1;
            }
            28% {
                transform: translateY(-5px);
                background-color: #c1c1c2;
            }
            44% {
                transform: translateY(0px);
                background-color: #dfdfdf;
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

    <!-- Introduction Section -->
    <div class="introduction">
        <div class="row section">
            <div class="col-md-6">
                <h1 class="title">Your Glow up starts here</h1>
                <p class="section-content">
                At Miracle Beauty Care, we believe beauty is more than what meets the eye—it’s a feeling, a glow, a quiet confidence that lingers long after you leave. 
                Our little salon is a haven of care, calm, and creativity, where every brushstroke, every touch, and every smile is delivered with intention.
                </p>
                <p class="section-content">
                Whether you’re here for a quick eyebrow threading, a soothing facial after a long week, or a glow-up that marks a new chapter in life, we treat every session as an opportunity to uplift, heal, and connect.
                We make sure that every moment with us feels personal, peaceful, and truly magical.
                </p>
                <p class="section-content">
                Because at Miracle, every visit’s a miracle!
                </p>
        <!-- Social Media Links -->
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
            <div class="col-md-6">
                <img src="{{ asset('images/miracle.jpg') }}" alt="Salon Interior" class="image-1">
            </div>
        </div>
    </div>
        
    <!-- Mission, Vision, Goal Sections -->
         <div class="main-section">
            <div class="section" >
                <img src="{{ asset('images/nails.png') }}" alt="nails" class="decorative-image">
            </div>
        <div class="section">
        <div class="row text-center">
       
        <!-- Mission -->
        <div class="row justify-content-end pe-md-4">
        <div class="col-md-3" style="color:rgb(248, 151, 199)">
            <h2><em>Mission</em></h2>
            <p style="color:rgb(0, 0, 0)"> To deliver heartfelt, high-quality beauty services that make each client feel cared for, confident, and beautiful. </p>
        </div>
    
        <!-- Vision -->
        <div class="col-md-3" style="color:rgb(149, 163, 243)">
            <h2><em>Vision</em></h2>
            <p style="color:rgb(0, 0, 0)">Become a beloved salon known for genuine care and consistency; where clients come not just for services, 
                but for a feel-good experience that uplifts their day.</p>
        </div>
    
        <!-- Goal -->
        <div class="col-md-3" style="color:rgb(140, 181, 116)">
            <h2><em>Goal</em></h2>
            <p style="color:rgb(0, 0, 0)">To grow with our community by continuously learning, improving, and providing exceptional service. </p>
        </div>
    </div>

<!-- Founder Section -->
<div class="main-section mb-5">
<div class="section">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <h3 class="title">FOUNDER & VISIONARY</h3>
        </div>
    </div>
    
    <div class="row align-items-center">
        <!-- Founder Image Column -->
        <div class="col-lg-4 mb-3 mb-lg-2">
            <div class="founder-image-container">
                <img src="{{ asset('images/bina.png') }}" alt="Jessica Williams - Founder" class="img-fluid rounded">
            </div>
        </div>
        
        <!-- Founder Info Column -->
        <div class="col-lg-7">
            <div class="founder-quote">
                <i class="bi bi-quote"></i>
                <p>Miracle was born from my hands, but it lives through the hearts we touch every day.</p>
            </div>
            <div class="founder-info">
                <h2 class="founder-name">Manju Gurung Siwakoti</h2>
                <p class="subtitle">Founder & Creative Director</p>
                <div class="founder-divider"></div>
                <p class="member-description">
                The heart and hands behind Miracle Beauty Care, is a visionary businesswoman, and a true artist in the world of beauty. 
                With over a decade of experience in the industry, her journey began humbly as a trainee—fueled by passion, persistence, and a dream to one day create a space where beauty would be more than skin-deep. 
                She has not only refined her craft through experience but also poured her heart into developing Miracle’s signature treatment protocols, each designed to provide personalized care with a luxurious touch.
                </p>
                <p class="member-description">
                Her vision for Miracle Beauty Care was clear from the start; to build a sanctuary where anyone, regardless of background, could experience the perfect blend of innovation, comfort, and confidence. 
                Today, her salon stands as a reflection of that vision—where every detail, every service, and every smile speaks of her commitment to making every visit, truly, a miracle. 
                </p>
                <div class="founder-credentials">
                    <span>Certified Beauty Specialist</span>
                    <span>Beauty Educator</span>
                    <span>Professional Makeup Specialist</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Our Team Section -->
<div class="container our-team-section section" id="team-section">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h2 class="title">Our Team</h2>
            <p class="subtitle">Meet the experts behind Miracle Beauty Care</p>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <!-- Team Member 1 -->
        <div class="col-md-4 col-sm-6 mb-4 d-flex">
            <div class="team-member">
                <div class="member-image">
                    <img src="{{ asset('images/test.png') }}" alt="Hair Stylist" class="img-fluid rounded">
                </div>
                <div class="member-info p-3">
                    <h4 class="member-name">Jenisha Pandey</h4>
                    <p class="member-title">Beauty Specialist</p>
                    <p class="member-description">
                        Jenisha is a talented beauty specialist at Miracle Beauty Care with a gentle touch and a sharp eye for detail. 
                        Known for her calming presence and dedication to client satisfaction, she creates looks that enhance natural beauty while making every guest feel truly special.
                    </p>
                </div>
            </div>
        </div>
        
       <!-- Team Member 2 -->
       <div class="col-md-4 col-sm-6 mb-4 d-flex">
            <div class="team-member">
                <div class="member-image">
                    <img src="{{ asset('images/test2.png') }}" alt="Esthetician" class="img-fluid rounded">
                </div>
                <div class="member-info p-3">
                    <h4 class="member-name">Ganga Tamang</h4>
                    <p class="member-title">Trainee</p>
                    <p class="member-description">
                        With a strong dedication to growth and a genuine love for making clients feel confident and cared for, she is steadily building her skills in a nurturing and inspiring environment.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Team Member 3 -->
        <div class="col-md-4 col-sm-6 mb-4 d-flex">
            <div class="team-member">
                <div class="member-image">
                    <img src="{{ asset('images/test3.png') }}" alt="Marketing" class="img-fluid rounded">
                </div>
                <div class="member-info p-3">
                    <h4 class="member-name">Maya Gurung</h4>
                    <p class="member-title">Marketing & Creative</p>
                    <p class="member-description">
                    Maya is the creative energy behind Miracle Beauty Care’s marketing. 
                    With a flair for visuals and a deep understanding of our salon’s soul, she helps us connect with our clients online and off. 
                    </p>
            </div>
        </div>
    </div>
</div>

<!-- Popular Offers Section -->
<div class="container my-5 popular-offers-section">
<div class="section">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h2 class="title">Our Most Popular Services</h2>
            <p class="subtitle">All-time customer favorites and widely booked services</p>
        </div>

        <div class="row justify-content-center">
        <!-- Offer 1 -->
        <div class="col-md-4 col-sm-6 mb-4 d-flex">
            <div class="card offer-card h-100 text-center">
                <div class="card-body">
                    <div class="ps-image">
                        <img src="{{ asset('images/Facial.jpg') }}" alt="facial" class="img-fluid rounded">
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
                    <div class="ps-image">
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
                    <div class="ps-image">
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const chatToggle = document.querySelector('.chat-toggle');
            const chatBox = document.querySelector('.chat-box');
            const closeChat = document.querySelector('.close-chat');
            const messageInput = document.querySelector('.message-input');
            const sendButton = document.querySelector('.send-button');
            const chatBody = document.querySelector('.chat-body');
            const typingIndicator = document.querySelector('.typing-indicator');
            
            // Toggle chat box visibility
            chatToggle.addEventListener('click', function() {
                chatBox.style.display = 'flex';
                chatToggle.style.display = 'none';
            });
            
            // Close chat box
            closeChat.addEventListener('click', function() {
                chatBox.style.display = 'none';
                chatToggle.style.display = 'flex';
            });
            
            // Send message function
            function sendMessage() {
                const message = messageInput.value.trim();
                if (message) {
                    // Add user message to chat
                    addMessage(message, 'user');
                    messageInput.value = '';
                    
                    // Show typing indicator
                    typingIndicator.style.display = 'block';
                    chatBody.scrollTop = chatBody.scrollHeight;
                    
                    // Simulate response after a delay
                    setTimeout(function() {
                        typingIndicator.style.display = 'none';
                        
                        // Add automated response
                        const responses = [
                            "Thank you for your message! Our beauty specialist will get back to you shortly.",
                            "Hello! We'd be happy to assist you. How can we help with your beauty needs today?",
                            "Thanks for reaching out to Miracle Beauty Care. We'll respond to your query as soon as possible.",
                            "We appreciate your interest in our services. Can you please provide more details so we can assist you better?"
                        ];
                        const randomResponse = responses[Math.floor(Math.random() * responses.length)];
                        addMessage(randomResponse, 'admin');
                    }, 1500);
                }
            }
            
            // Add a message to the chat
            function addMessage(text, sender) {
                const messageDiv = document.createElement('div');
                messageDiv.classList.add('chat-message');
                messageDiv.classList.add(sender + '-message');
                messageDiv.textContent = text;
                
                chatBody.insertBefore(messageDiv, typingIndicator);
                chatBody.scrollTop = chatBody.scrollHeight;
            }
            
            // Send message on button click
            sendButton.addEventListener('click', sendMessage);
            
            // Send message on Enter key
            messageInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    sendMessage();
                }
            });
        });
    </script>

        <footer class="py-4 mt-5 text-center">
            <p>MiracleBeautyCare © 2025 | All Rights Reserved.</p>
        </footer>
</body>
</html>

