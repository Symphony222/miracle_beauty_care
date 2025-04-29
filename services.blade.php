<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Miracle Beauty Care</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
        }
        
        body {
            background-color: white;
            color: #333;
            font-family: 'Montserrat', sans-serif;
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

        :root {
            --primary: #8a4fff;
            --primary-light: #EEE5FD;
            --dark:rgb(101, 113, 95);
        }
        
        
        .service-card {
            background: #EEE5FD;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(21, 13, 36, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(138, 79, 255, 0.15);
        }
        
        .service-icon {
            width: 60px;
            height: 60px;
            background:#ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: #C5D9BC;
            font-size: 24px;
        }
        
        .service-title {
            color: var(--dark);
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        .service-description {
            color: #666;
            font-size: 0.95rem;
        }
        
        .btn-more {
            border: none;
            padding: 8px 25px;
            border-radius: 50px;
            transition: all 0.3s ease;
        }
        
        .btn-more:hover {
            background: #D4DBD7;
            transform: translateY(-2px);
        }
        
        .page-header {
            background: linear-gradient(135deg,rgb(255, 233, 244) 0%,rgb(238, 229, 253) 100%);
            padding: 80px 0;
            margin-bottom: 60px;
            border: 1px solid black;
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

        .section-title {
            color: var(--dark);
            font-weight: 700;
            letter-spacing: 1px;
            position: relative;
            display: inline-block;
            text-align: center;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 2px;
            background: #FFE9F4;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

    /* Modal Styles */
        .service-modal {
            display: none;
            position: absolute;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background-color: #f9f8f4;
            margin-top: 15px;
            margin: auto;
            padding: 30px;
            border-radius: 15px;
            width: 90%;
            max-width: 500px;
            position: relative;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .close-modal {
            position: absolute;
            right: 20px;
            top: 15px;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            color: #aaa;
        }

        .close-modal:hover {
            color: #333;
        }

        .service-row {
            padding: 12px 0;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .service-row:last-child {
            border-bottom: none;
        }

        .price-display {
            font-weight: 500;
        }

        .book-service-btn {
            background-color: #e9e9e9;
            border: none;
            border-radius: 20px;
            padding: 6px 15px;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .book-service-btn:hover {
            background-color: #d0d0d0;
        }

        .btn-modal-close {
            background-color: #e9e9e9;
            border: none;
            border-radius: 25px;
            padding: 8px 30px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-modal-close:hover {
            background-color: #d0d0d0;
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

        <!-- Page Header -->
        <div class="page-header text-center section">
            <div class="container">
                <h1 class="display-4 fw-bold mb-3">Our Beauty Services</h1>
                <p class="lead fst-italic">Professional treatments to enhance your natural beauty</p>
            </div>
        </div>

        <!-- Facial Services Section -->
            <div class="container mb-5 section">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="section-title mb-4">Facial Treatments</h2>
                        <p class="text-muted">Rejuvenate your skin with our expert facial treatments</p>
                    </div>
                </div>
    
                <div class="row g-4">
                    <!-- Cleansing Service Card -->
                        <div class="col-md-3 section">
                            <div class="service-card text-center p-4">
                                <div class="service-icon">
                                    <i class="bi bi-droplet"></i>
                                </div>
                                <h4 class="service-title">Cleansing</h4>
                                <p class="service-description mb-4">Deep pore cleansing to remove impurities and refresh your skin</p>
                                <button class="btn btn-more" onclick="openServiceModal('cleansing')">Click Here</button>
                            </div>
                        </div>

        <!-- Custom Modal for Cleansing -->
            <div class="service-modal" style="top:-150vh;" id="cleansingModal">
                <div class="modal-content">
                    <span class="close-modal" onclick="closeServiceModal()">&times;</span>
                    <h2 class="text-center mb-4">Cleansing Services</h2>
                            
                <div class="service-list">
                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Acne skin cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.600</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                                
                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Gold Cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.700</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                                
                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Wrinkle skin Cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.850</span>
                            <button class="book-service-btn">Book this service</button>
                            </div>
                        </div>
                                
                    <div class="service-row d-flex justify-content-between align-items-center mb-4">
                        <span>Lotus Cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.880</span>
                            <button class="book-service-btn">Book this service</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
        <!-- Facial -->
            <div class="col-md-3 section">
                <div class="service-card text-center p-4">
                    <div class="service-icon">
                        <i class="bi bi-droplet"></i>
                    </div>
                    <h4 class="service-title">Facial</h4>
                    <p class="service-description mb-4">Rejuvenating facial treatment to hydrate, nourish, and give your skin a healthy glow</p>
                    <button class="btn btn-more" onclick="openServiceModal('facial')">Click Here</button>
                </div>
            </div>

    <!-- Custom Modal for facial -->
    <div class="service-modal" style="top:-150vh;" id="facialModal">
                <div class="modal-content">
                    <span class="close-modal" onclick="closeServiceModal()">&times;</span>
                    <h2 class="text-center mb-4">Facial Services</h2>
                            
                <div class="service-list">
                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Deep Cleaning</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.1000</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                                
                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Fruit Fusion</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.1200</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                                
                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Radiant Gold</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.1550</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>

                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Glow Boost</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.1550</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>

                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Lotus Glow</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.2000</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>

                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Lotus Wrinkle Care</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.2500</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>

                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Shahnaz Care</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.2200</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>

                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Shahnaz Gold Care</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.2500</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>

                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Thermo Facial</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.3500</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                                                    
                    <div class="service-row d-flex justify-content-between align-items-center mb-4">
                        <span>Acne Care</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.4500</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>

                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Hydra Facial</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.5000</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>

                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Hydra Facial Thread</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.6500</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>

                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Hydra Facial Beauty+</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.6500</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>  

    <!-- Hair Services Section -->
    <div class="container mb-5 section">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="section-title mb-4">Hair Treatments</h2>
                        <p class="text-muted">Glow your hair up with our expert hair colors and care treatments</p>
                    </div>
                </div>
    
                <div class="row g-4">
                    <!-- haircolor Service Card -->
                        <div class="col-md-3 section">
                            <div class="service-card text-center p-4">
                                <div class="service-icon">
                                    <i class="bi bi-droplet"></i>
                                </div>
                                <h4 class="service-title">Hair Color </h4>
                                <p class="service-description mb-4">Change your hair with our prefessional hair color treatments</p>
                                <button class="btn btn-more" onclick="openServiceModal('haircolor')">Click Here</button>
                            </div>
                        </div>

        <!-- Custom Modal for haircolor -->
            <div class="service-modal" style="top:-110vh;" id="haircolorModal">
                <div class="modal-content">
                    <span class="close-modal" onclick="closeServiceModal()">&times;</span>
                    <h2 class="text-center mb-4">Haircolor Services</h2>
                            
                <div class="service-list">
                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Acne skin cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.600</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                                
                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Gold Cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.700</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                                
                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Wrinkle skin Cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.850</span>
                            <button class="book-service-btn">Book this service</button>
                            </div>
                        </div>
                                
                    <div class="service-row d-flex justify-content-between align-items-center mb-4">
                        <span>Lotus Cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.880</span>
                            <button class="book-service-btn">Book this service</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
                <!-- Hair Treatments -->
                <div class="col-md-3 section">
                    <div class="service-card text-center p-4">
                        <div class="service-icon">
                            <i class="bi bi-tree"></i>
                        </div>
                        <h4 class="service-title">Hair Treatments</h4>
                        <p class="service-description mb-4">Repair damaged hair with our intensive treatment therapies</p>
                        <button class="btn btn-more" onclick="openServiceModal('hairtreatments')">Click Here</button>
                    </div>
                </div>

  <!-- Custom Modal for Hair treatments -->
        <div id="hairtreatmentsModal" style="top:-110vh;" class="service-modal">
            <div class="modal-content">
                <span class="close-modal" onclick="closeServiceModal()">&times;</span>
                <h2 class="text-center mb-4">Hair treatments</h2>
                
                <div class="service-list">
                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Acne skin cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.600</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                    
                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Gold Cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.700</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                    
                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Wrinkle skin Cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.850</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                    
                    <div class="service-row d-flex justify-content-between align-items-center mb-4">
                        <span>Lotus Cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.880</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                
                <!-- Hair Cuts & Care -->
                <div class="col-md-3 section">
                    <div class="service-card text-center p-4">
                        <div class="service-icon">
                            <i class="bi bi-scissors"></i>
                        </div>
                        <h4 class="service-title">Hair Cuts & Care</h4>
                        <p class="service-description mb-4">Precision cuts and styling for your perfect look</p>
                        <button class="btn btn-more" onclick="openServiceModal('haircuts')">Click Here</button>
                    </div>
                </div>

    <!-- Custom Modal for Hair cuts -->
        <div id="haircutsModal"  style="top:-110vh;" class="service-modal">
            <div class="modal-content">
                <span class="close-modal" onclick="closeServiceModal()">&times;</span>
                <h2 class="text-center mb-4">Haircut Services</h2>
                
                <div class="service-list">
                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Acne skin cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.600</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                    
                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Gold Cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.700</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                    
                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Wrinkle skin Cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.850</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                    
                    <div class="service-row d-flex justify-content-between align-items-center mb-4">
                        <span>Lotus Cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.880</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nail & basics Services Section -->
        <div class="container mb-5 section">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title mb-4">Nails & Basic Services</h2>
                    <p class="text-muted">Pamper your hands and feet with our nail arts and treatments and enjoy other basic services</p>
                </div>
            </div>
            
            <div class="row g-4">
                <!-- Nail Arts -->
                <div class="col-md-3 section">
                    <div class="service-card text-center p-4">
                        <div class="service-icon">
                            <i class="bi bi-brush"></i>
                        </div>
                        <h4 class="service-title">Nail Arts</h4>
                        <p class="service-description mb-4">Creative nail designs to express your personal style</p>
                        <button class="btn btn-more" onclick="openServiceModal('nailarts')">Click Here</button>
                    </div>
                </div>

        <!-- Custom Modal for Nail arts -->
                <div id="nailartsModal"  style="top:-70vh;" class="service-modal">
            <div class="modal-content">
                <span class="close-modal" onclick="closeServiceModal()">&times;</span>
                <h2 class="text-center mb-4">Nailart Services</h2>
                
                <div class="service-list">
                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Acne skin cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.600</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                    
                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Gold Cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.700</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                    
                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Wrinkle skin Cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.850</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                    
                    <div class="service-row d-flex justify-content-between align-items-center mb-4">
                        <span>Lotus Cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.880</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                
                <!-- Basic Services -->
                <div class="col-md-3 section">
                    <div class="service-card text-center p-4">
                        <div class="service-icon">
                            <i class="bi bi-hand-thumbs-up"></i>
                        </div>
                        <h4 class="service-title">Basic Services</h4>
                        <p class="service-description mb-4">Essential nail care for healthy, beautiful hands</p>
                        <button class="btn btn-more" onclick="openServiceModal('basics')">Click Here</button>
                    </div>
                </div>
        
    <!-- Custom Modal for basics -->
        <div id="basicsModal"  style="top:-70vh;" class="service-modal">
            <div class="modal-content">
                <span class="close-modal" onclick="closeServiceModal()">&times;</span>
                <h2 class="text-center mb-4">Basic Services</h2>
                
                <div class="service-list">
                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Acne skin cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.600</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                    
                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Gold Cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.700</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                    
                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Wrinkle skin Cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.850</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                    
                    <div class="service-row d-flex justify-content-between align-items-center mb-4">
                        <span>Lotus Cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.880</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Makeup Section -->
        <div class="container mb-5 section">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title mb-4">Makeup & Styling</h2>
                    <p class="text-muted">Enhance your beauty with professional makeup services</p>
                </div>
            </div>
            
            <div class="row g-4">
                <!-- Makeup-HairStyles -->
                <div class="col-md-3 section">
                    <div class="service-card text-center p-4">
                        <div class="service-icon">
                            <i class="bi bi-magic"></i>
                        </div>
                        <h4 class="service-title">Makeup & Hairstyles</h4>
                        <p class="service-description mb-4">Complete looks for special occasions or everyday glam</p>
                        <button class="btn btn-more" onclick="openServiceModal('makeup')">Click Here</button>
                    </div>
                </div>
        
        <!-- Custom Modal for Makeup & Hairstyles -->
                <div id="makeupModal"  style="top:-30vh;" class="service-modal">
            <div class="modal-content">
                <span class="close-modal" onclick="closeServiceModal()">&times;</span>
                <h2 class="text-center mb-4">Makeup & Styling Services</h2>
                
                <div class="service-list">
                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Acne skin cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.600</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                    
                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Gold Cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.700</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                    
                    <div class="service-row d-flex justify-content-between align-items-center mb-3">
                        <span>Wrinkle skin Cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.850</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                    
                    <div class="service-row d-flex justify-content-between align-items-center mb-4">
                        <span>Lotus Cleansing</span>
                        <div class="d-flex align-items-center">
                            <span class="price-display me-3">Rs.880</span>
                            <button class="book-service-btn">Book this service</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="container text-center py-5 mb-5">
            <div class="section">
                <h3 class="mb-4">Ready to experience our services?</h3>
                <p class="lead mb-4">Book your appointment today and let our experts enhance your natural beauty</p>
                <a href="{{ route('contacts') }}" class="btn btn-lg btn-more text-black px-5">Contact Us</a>
            </div>      
        </div>

        <footer class="py-4 mt-5 text-center">
            <p>MiracleBeautyCare © 2025 | All Rights Reserved.</p>
        </footer>
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

    <!-- JavaScript for Modal Functionality -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Define all service types with their corresponding modal IDs
        const serviceModals = {
            'cleansing': 'cleansingModal',
            'facial': 'facialModal',
            'haircolor': 'haircolorModal',
            'hairtreatments': 'hairtreatmentsModal', 
            'haircuts': 'haircutsModal',
            'nailarts': 'nailartsModal',
            'basics': 'basicsModal',
            'makeup': 'makeupModal'
        };

        // Function to open modal by service type
         window.openServiceModal = function(serviceType) {
            const modalId = serviceModals[serviceType];
            if (modalId) {
                const modal = document.getElementById(modalId);
                if (modal) {
                    modal.style.display = 'flex';
                    document.body.style.overflow = 'none'; // Prevent scrolling
                }
            }
        };

        // Function to close all modals
            window.closeServiceModal = function() {
                // Close all modals by getting all elements with class 'service-modal'
                const allModals = document.querySelectorAll('.service-modal');
                allModals.forEach(modal => {
                    modal.style.display = 'none';
                });
                document.body.style.overflow = 'auto'; // Re-enable scrolling
            };
            
            // Set up event listeners for all close buttons and modal backgrounds
            const closeButtons = document.querySelectorAll('.close-modal, .btn-modal-close');
            closeButtons.forEach(button => {
                button.addEventListener('click', closeServiceModal);
            });
            
            // Close when clicking outside modal content
            const modals = document.querySelectorAll('.service-modal');
            modals.forEach(modal => {
                modal.addEventListener('click', function(event) {
                    if (event.target === this) {
                        closeServiceModal();
                    }
                });
            });
            
            // Close modal when ESC key is pressed
            document.addEventListener('keydown', function(event) {
                if (event.key === "Escape") {
                    closeServiceModal();
                }
            });
        });
    </script>
</body>
</html>