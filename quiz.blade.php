<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take a quiz - Miracle Beauty Care</title>
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

        .quiz-hero {
            background: linear-gradient(135deg,rgb(255, 233, 244) 0%,rgb(238, 229, 253) 100%);
            padding: 80px 0;
            margin-bottom: 60px;
            border: 1px solid black;
            text-align: center;
        }
        
        .quiz-card {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            text-align: center;
            margin-bottom: 30px;
            border: 1px solid #eee;
        }
        
        .quiz-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(151, 93, 227, 0.15);
        }
        
        .quiz-icon {
            width: 80px;
            height: 80px;
            background: #C5D9BC;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 32px;
            color: #485343;
        }
        
        .quiz-btn {
            color:rgb(89, 54, 118);
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            margin-top: 20px;
            transition: all 0.3s ease;
        }
        
        .quiz-btn:hover {
            background: #D4DBD7;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(119, 143, 160, 0.3);
        }

    /* Benefits section */
        .benefit-item {
            text-align: center;
            padding: 20px;
        }

        .benefit-item i {
            font-size: 2.5rem;
            color:rgb(210, 183, 246);
            margin-bottom: 15px;
        }
    
    /* Quiz Forms Styling */
        .quiz-form-container {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            margin-bottom: 60px;
            display: none;
        }

        .question-container {
            display: none;
        }

        .question-container.active {
            display: block;
        }

        .quiz-form-container h3 {
            margin-bottom: 30px;
            color: rgb(89, 54, 118);
        }

        .option-card {
            border: 2px solid #EEE5FD;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .option-card:hover {
            background-color: rgba(238, 229, 253, 0.3);
        }

        .option-card.selected {
            background-color: rgba(166, 87, 245, 0.1);
            border-color: rgb(166, 87, 245);
        }

        .next-btn, .prev-btn, .submit-btn {
            background-color: rgb(166, 87, 245);
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 500;
            margin-top: 20px;
            transition: all 0.3s ease;
        }

        .next-btn:hover, .prev-btn:hover, .submit-btn:hover {
            background-color: rgb(89, 54, 118);
            transform: translateY(-3px);
        }

        .prev-btn {
            background-color: #D4DBD7;
            color: #333;
            margin-right: 10px;
        }

        .progress-container {
            width: 100%;
            height: 8px;
            background-color: #EEE5FD;
            border-radius: 4px;
            margin-bottom: 30px;
        }

        .progress-bar {
            height: 100%;
            background-color: rgb(166, 87, 245);
            border-radius: 4px;
            transition: width 0.3s ease;
        }

        .result-container {
            text-align: center;
            display: none;
        }

        .result-icon {
            font-size: 60px;
            color: rgb(166, 87, 245);
            margin-bottom: 20px;
        }

        .recommendations {
            background-color: rgba(238, 229, 253, 0.3);
            border-radius: 10px;
            padding: 20px;
            margin-top: 30px;
        }

        .recommendations h4 {
            color: rgb(89, 54, 118);
            margin-bottom: 15px;
        }

        .service-recommendation {
            margin-top: 30px;
            padding: 20px;
            border: 1px solid #EEE5FD;
            border-radius: 10px;
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
    
        <!-- Quiz Hero Section -->
        <div class="quiz-hero section">
            <div class="container">
                <h1 class="display-5 fw-bold mb-2">Don't know your Skin & Hair Type?</h1>
                <p class="lead fst-italic">Take our quiz to discover your skin and hair type </p>
            </div>
        </div>

        <!-- Quiz Options Section -->
        <div id="quiz-options" class="container mb-5">
                    <div class="row justify-content-center">
                        <!-- Skin Quiz Card -->
                        <div class="col-md-5 section visible" data-aos="fade-up">
                            <div class="quiz-card">
                                <div class="quiz-icon">
                                    <i class="bi bi-moisture"></i>
                                </div>
                                <h3>Skin Quiz</h3>
                                <p>Discover your skin type and get personalized product recommendations for a radiant complexion.</p>
                                <button class="quiz-btn" onclick="startQuiz('skin')">Start Skin Quiz</button>
                            </div>
                        </div>
                        
                        <!-- Hair Quiz Card -->
                        <div class="col-md-5 section visible" data-aos="fade-up" data-aos-delay="100">
                            <div class="quiz-card">
                                <div class="quiz-icon">
                                    <i class="bi bi-scissors"></i>
                                </div>
                                <h3>Hair Quiz</h3>
                                <p>Identify your hair type and learn which treatments will give you your healthiest hair yet.</p>
                                <button class="quiz-btn" onclick="startQuiz('hair')">Start Hair Quiz</button>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- Skin Quiz Form -->
        <div id="skin-quiz-container" class="container quiz-form-container section">
            <h3 class="text-center mb-4">Skin Type Quiz</h3>
            <div class="progress-container">
                <div id="skin-progress" class="progress-bar" style="width: 0%"></div>
            </div>

        <!-- Question 1 -->
        <div id="skin-q1" class="question-container active">
            <h4>1. How does your skin feel a few hours after washing?</h4>
            <div class="option-card" onclick="selectOption('skin', 1, 'dry')">
                <p><strong>A.</strong> Tight and dry</p>
            </div>
            <div class="option-card" onclick="selectOption('skin', 1, 'normal')">
                <p><strong>B.</strong> Comfortable, neither oily nor dry</p>
            </div>
            <div class="option-card" onclick="selectOption('skin', 1, 'oily')">
                <p><strong>C.</strong> Shiny and oily, especially in the T-zone</p>
            </div>
            <div class="option-card" onclick="selectOption('skin', 1, 'combination')">
                <p><strong>D.</strong> Oily in some places, dry in others</p>
            </div>
            <div class="text-center mt-4">
                <button class="next-btn" onclick="nextQuestion('skin', 1)">Next Question</button>
            </div>
        </div>

        <!-- Question 2 -->
        <div id="skin-q2" class="question-container">
            <h4>2. How often do you experience breakouts?</h4>
            <div class="option-card" onclick="selectOption('skin', 2, 'dry')">
                <p><strong>A.</strong> Rarely or never</p>
            </div>
            <div class="option-card" onclick="selectOption('skin', 2, 'normal')">
                <p><strong>B.</strong> Occasionally, usually around my period</p>
            </div>
            <div class="option-card" onclick="selectOption('skin', 2, 'oily')">
                <p><strong>C.</strong> Frequently, especially in my T-zone</p>
            </div>
            <div class="option-card" onclick="selectOption('skin', 2, 'sensitive')">
                <p><strong>D.</strong> Sometimes, and my skin gets red and irritated easily</p>
            </div>
            <div class="text-center mt-4">
                <button class="prev-btn" onclick="prevQuestion('skin', 2)">Previous</button>
                <button class="next-btn" onclick="nextQuestion('skin', 2)">Next Question</button>
            </div>
        </div>

        <!-- Question 3 -->
        <div id="skin-q3" class="question-container">
            <h4>3. How visible are your pores?</h4>
            <div class="option-card" onclick="selectOption('skin', 3, 'dry')">
                <p><strong>A.</strong> Barely visible</p>
            </div>
            <div class="option-card" onclick="selectOption('skin', 3, 'normal')">
                <p><strong>B.</strong> Somewhat visible but not concerning</p>
            </div>
            <div class="option-card" onclick="selectOption('skin', 3, 'oily')">
                <p><strong>C.</strong> Very visible, especially on my nose and cheeks</p>
            </div>
            <div class="option-card" onclick="selectOption('skin', 3, 'combination')">
                <p><strong>D.</strong> Visible in some areas (like T-zone) but not others</p>
            </div>
            <div class="text-center mt-4">
                <button class="prev-btn" onclick="prevQuestion('skin', 3)">Previous</button>
                <button class="next-btn" onclick="nextQuestion('skin', 3)">Next Question</button>
            </div>
        </div>
                        
        <!-- Question 4 -->
        <div id="skin-q4" class="question-container">
            <h4>4. How does your skin react to new products?</h4>
            <div class="option-card" onclick="selectOption('skin', 4, 'normal')">
                <p><strong>A.</strong> Usually adapts well without issues</p>
            </div>
            <div class="option-card" onclick="selectOption('skin', 4, 'sensitive')">
                <p><strong>B.</strong> Often becomes red, itchy or irritated</p>
            </div>
            <div class="option-card" onclick="selectOption('skin', 4, 'dry')">
                <p><strong>C.</strong> Sometimes feels more dry or tight</p>
            </div>
            <div class="option-card" onclick="selectOption('skin', 4, 'oily')">
                <p><strong>D.</strong> May cause more oil production or breakouts</p>
            </div>
            <div class="text-center mt-4">
                <button class="prev-btn" onclick="prevQuestion('skin', 4)">Previous</button>
                <button class="next-btn" onclick="nextQuestion('skin', 4)">Next Question</button>
            </div>
        </div>
                        
        <!-- Question 5 -->
        <div id="skin-q5" class="question-container">
            <h4>5. How would you describe your skin's texture?</h4>
            <div class="option-card" onclick="selectOption('skin', 5, 'dry')">
                <p><strong>A.</strong> Often flaky or rough</p>
            </div>
            <div class="option-card" onclick="selectOption('skin', 5, 'normal')">
                <p><strong>B.</strong> Generally smooth and even</p>
            </div>
            <div class="option-card" onclick="selectOption('skin', 5, 'oily')">
                <p><strong>C.</strong> Smooth but with occasional blemishes</p>
            </div>
            <div class="option-card" onclick="selectOption('skin', 5, 'sensitive')">
                <p><strong>D.</strong> Uneven with some redness or rough patches</p>
            </div>
            <div class="text-center mt-4">
                <button class="prev-btn" onclick="prevQuestion('skin', 5)">Previous</button>
                <button class="submit-btn" onclick="calculateResults('skin')">See My Results</button>
            </div>
        </div>

        <!-- Skin Quiz Results -->
        <div id="skin-results" class="result-container">
            <div class="result-icon">
                <i class="bi bi-award"></i>
            </div>
            <h3>Your Skin Type Results</h3>
            <div id="skin-type-result" class="mt-4">
                <!-- Results will be inserted here via JavaScript -->
            </div>
            <div class="recommendations">
                <h4>Recommended Products</h4>
                <div id="skin-recommendations">
                    <!-- Recommendations will be inserted here via JavaScript -->
                </div>
            </div>
            <div class="service-recommendation">
                <h4>Recommended Miracle Beauty Care Services</h4>
                <div id="skin-services">
                    <!-- Service recommendations will be inserted here -->
                </div>
            </div>
            <div class="text-center mt-4">
                <button class="quiz-btn" onclick="resetQuiz()">Back to Quizzes</button>
            </div>
        </div>
    </div>

        <!-- Hair Quiz Form -->
        <div id="hair-quiz-container" class="container quiz-form-container section">
            <h3 class="text-center mb-4">Hair Type Quiz</h3>
            <div class="progress-container">
                <div id="hair-progress" class="progress-bar" style="width: 0%"></div>
            </div>
                        
            <!-- Question 1 -->
            <div id="hair-q1" class="question-container active">
                <h4>1. How would you describe your hair's texture?</h4>
                <div class="option-card" onclick="selectOption('hair', 1, 'straight')">
                    <p><strong>A.</strong> Straight and smooth</p>
                </div>
                <div class="option-card" onclick="selectOption('hair', 1, 'wavy')">
                    <p><strong>B.</strong> Wavy with some body</p>
                </div>
                <div class="option-card" onclick="selectOption('hair', 1, 'curly')">
                    <p><strong>C.</strong> Curly with defined curls</p>
                </div>
                <div class="option-card" onclick="selectOption('hair', 1, 'coily')">
                    <p><strong>D.</strong> Coily or tightly curled</p>
                </div>
                <div class="text-center mt-4">
                    <button class="next-btn" onclick="nextQuestion('hair', 1)">Next Question</button>
                </div>
            </div>
                        
            <!-- Question 2 -->
            <div id="hair-q2" class="question-container">
                <h4>2. How often does your hair get oily?</h4>
                <div class="option-card" onclick="selectOption('hair', 2, 'dry')">
                    <p><strong>A.</strong> Rarely, my hair tends to be dry</p>
                </div>
                <div class="option-card" onclick="selectOption('hair', 2, 'normal')">
                    <p><strong>B.</strong> Every 2-3 days, it's fairly balanced</p>
                </div>
                <div class="option-card" onclick="selectOption('hair', 2, 'oily')">
                    <p><strong>C.</strong> Daily, I need to wash it frequently</p>
                </div>
                <div class="option-card" onclick="selectOption('hair', 2, 'combination')">
                    <p><strong>D.</strong> Oily roots but dry ends</p>
                </div>
                <div class="text-center mt-4">
                    <button class="prev-btn" onclick="prevQuestion('hair', 2)">Previous</button>
                    <button class="next-btn" onclick="nextQuestion('hair', 2)">Next Question</button>
                </div>
            </div>
                        
            <!-- Question 3 -->
            <div id="hair-q3" class="question-container">
                <h4>3. How would you describe your scalp?</h4>
                <div class="option-card" onclick="selectOption('hair', 3, 'dry')">
                    <p><strong>A.</strong> Dry, sometimes flaky</p>
                </div>
                <div class="option-card" onclick="selectOption('hair', 3, 'normal')">
                    <p><strong>B.</strong> Normal, no major issues</p>
                </div>
                <div class="option-card" onclick="selectOption('hair', 3, 'oily')">
                    <p><strong>C.</strong> Oily, especially around hairline</p>
                </div>
                <div class="option-card" onclick="selectOption('hair', 3, 'sensitive')">
                    <p><strong>D.</strong> Sensitive, gets irritated easily</p>
                </div>
                <div class="text-center mt-4">
                    <button class="prev-btn" onclick="prevQuestion('hair', 3)">Previous</button>
                    <button class="next-btn" onclick="nextQuestion('hair', 3)">Next Question</button>
                </div>
            </div>
                        
            <!-- Question 4 -->
            <div id="hair-q4" class="question-container">
                <h4>4. How does your hair respond to humidity?</h4>
                <div class="option-card" onclick="selectOption('hair', 4, 'high-porosity')">
                    <p><strong>A.</strong> Gets very frizzy and expands</p>
                </div>
                <div class="option-card" onclick="selectOption('hair', 4, 'normal-porosity')">
                    <p><strong>B.</strong> Slight frizz but generally manageable</p>
                </div>
                <div class="option-card" onclick="selectOption('hair', 4, 'low-porosity')">
                    <p><strong>C.</strong> Not much change, stays relatively the same</p>
                </div>
                <div class="option-card" onclick="selectOption('hair', 4, 'damaged')">
                    <p><strong>D.</strong> Varies a lot depending on treatments/products used</p>
                </div>
                <div class="text-center mt-4">
                    <button class="prev-btn" onclick="prevQuestion('hair', 4)">Previous</button>
                    <button class="next-btn" onclick="nextQuestion('hair', 4)">Next Question</button>
                </div>
            </div>
                        
            <!-- Question 5 -->
            <div id="hair-q5" class="question-container">
                <h4>5. How would you describe your hair's thickness?</h4>
                <div class="option-card" onclick="selectOption('hair', 5, 'fine')">
                    <p><strong>A.</strong> Fine, individual strands are thin</p>
                </div>
                <div class="option-card" onclick="selectOption('hair', 5, 'medium')">
                    <p><strong>B.</strong> Medium, not too thin or thick</p>
                </div>
                <div class="option-card" onclick="selectOption('hair', 5, 'thick')">
                    <p><strong>C.</strong> Thick, individual strands are coarse</p>
                </div>
                <div class="option-card" onclick="selectOption('hair', 5, 'mixed')">
                    <p><strong>D.</strong> Varies in different areas of my head</p>
                </div>
                <div class="text-center mt-4">
                    <button class="prev-btn" onclick="prevQuestion('hair', 5)">Previous</button>
                    <button class="submit-btn" onclick="calculateResults('hair')">See My Results</button>
                </div>
            </div>
                        
            <!-- Hair Quiz Results -->
            <div id="hair-results" class="result-container">
                <div class="result-icon">
                    <i class="bi bi-award"></i>
                </div>
                <h3>Your Hair Type Results</h3>
                <div id="hair-type-result" class="mt-4">
                    <!-- Results will be inserted here via JavaScript -->
                </div>
                <div class="recommendations">
                    <h4>Recommended Products</h4>
                    <div id="hair-recommendations">
                        <!-- Recommendations will be inserted here via JavaScript -->
                    </div>
                </div>
                <div class="service-recommendation">
                    <h4>Recommended Miracle Beauty Care Services</h4>
                    <div id="hair-services">
                        <!-- Service recommendations will be inserted here -->
                    </div>
                </div>
                <div class="text-center mt-4">
                    <button class="quiz-btn" onclick="resetQuiz()">Back to Quizzes</button>
                </div>
            </div>
        </div>
                        

        <!-- Benefits Section -->
        <div class="container text-center py-5 section">
            <h2 class="mb-5 fw-bold">Why Take Our Quiz?</h2>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <i class="bi bi-check-circle-fill text-primary fs-1 mb-3"></i>
                    <h4>Personalized Results</h4>
                    <p>Get recommendations tailored specifically to your skin and hair needs.</p>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <i class="bi bi-clock-fill text-primary fs-1 mb-3"></i>
                    <h4>Only 2 Minutes</h4>
                    <p>Our quick quiz gives you instant results without wasting time.</p>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-gift-fill text-primary fs-1 mb-3"></i>
                    <h4>Special Offers</h4>
                    <p>Quiz takers get exclusive discounts on recommended products.</p>
                </div>
            </div>
        </div>

            <footer class="py-4 mt-5 text-center">
                <p>MiracleBeautyCare © 2025 | All Rights Reserved.</p>
            </footer>
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

        // Store quiz answers
        let skinAnswers = {};
        let hairAnswers = {};
        
        // Start the quiz
        function startQuiz(quizType) {
            document.getElementById('quiz-options').style.display = 'none';
            document.getElementById('benefits-section').style.display = 'none';
            
            if (quizType === 'skin') {
                document.getElementById('skin-quiz-container').style.display = 'block';
                document.getElementById('skin-quiz-container').classList.add('visible');
            } else if (quizType === 'hair') {
                document.getElementById('hair-quiz-container').style.display = 'block';
                document.getElementById('hair-quiz-container').classList.add('visible');
            }
        }
        
        // Select an option
        function selectOption(quizType, questionNumber, value) {
            // First, remove 'selected' class from all options
            const options = document.querySelectorAll(`#${quizType}-q${questionNumber} .option-card`);
            options.forEach(option => {
                option.classList.remove('selected');
            });
            
            // Add 'selected' class to clicked option
            event.currentTarget.classList.add('selected');
            
            // Store the answer
            if (quizType === 'skin') {
                skinAnswers[questionNumber] = value;
            } else if (quizType === 'hair') {
                hairAnswers[questionNumber] = value;
            }
            
            // Enable the next button
            document.querySelector(`#${quizType}-q${questionNumber} .next-btn, #${quizType}-q${questionNumber} .submit-btn`).disabled = false;
        }

        // Go to next question
        function nextQuestion(quizType, currentQuestion) {
            // Hide current question
            document.getElementById(`${quizType}-q${currentQuestion}`).classList.remove('active');
            
            // Show next question
            document.getElementById(`${quizType}-q${currentQuestion + 1}`).classList.add('active');
            
            // Update progress bar
            const progress = (currentQuestion / 5) * 100;
            document.getElementById(`${quizType}-progress`).style.width = `${progress}%`;
        }

        // Go to previous question
        function prevQuestion(quizType, currentQuestion) {
        
            // Hide current question
            document.getElementById(`${quizType}-q${currentQuestion}`).classList.remove('active');
            
            // Show previous question
            document.getElementById(`${quizType}-q${currentQuestion - 1}`).classList.add('active');
            
            // Update progress bar
            const progress = ((currentQuestion - 2) / 5) * 100;
            document.getElementById(`${quizType}-progress`).style.width = `${progress}%`;
        }

        // Calculate quiz results
        function calculateResults(quizType) {
            let answers;
            if (quizType === 'skin') {
                answers = skinAnswers;
            } else {
                answers = hairAnswers;
            }
            
            // Count occurrences of each skin/hair type
            let typeCounts = {};
            
            for (let question in answers) {
                const type = answers[question];
                if (typeCounts[type]) {
                    typeCounts[type]++;
                } else {
                    typeCounts[type] = 1;
                }
            }
            
            // Find the most common type
            let maxCount = 0;
            let dominantType = '';
            
            for (let type in typeCounts) {
                if (typeCounts[type] > maxCount) {
                    maxCount = typeCounts[type];
                    dominantType = type;
                }
            }
            
            // Show results based on quiz type and dominant type
            if (quizType === 'skin') {
                // Hide questions, show results
                document.getElementById('skin-q5').classList.remove('active');
                document.getElementById('skin-results').style.display = 'block';
                
                // Set the progress bar to 100%
                document.getElementById('skin-progress').style.width = '100%';
                
                // Generate result content based on skin type
                generateSkinResults(dominantType);
            } else {
                // Hide questions, show results
                document.getElementById('hair-q5').classList.remove('active');
                document.getElementById('hair-results').style.display = 'block';
                
                // Set the progress bar to 100%
                document.getElementById('hair-progress').style.width = '100%';
                
                // Generate result content based on hair type
                generateHairResults(dominantType);
            }
        }

        // Generate skin quiz results
        function generateSkinResults(skinType) {
            const resultElement = document.getElementById('skin-type-result');
            const recommendationsElement = document.getElementById('skin-recommendations');
            const servicesElement = document.getElementById('skin-services');
            
            // Set result description based on skin type
            if (skinType === 'dry') {
                resultElement.innerHTML = `
                    <h4>Your skin type is: <span class="text-primary">Dry</span></h4>
                    <p>Your skin tends to feel tight and may have flaky patches. It lacks natural oils which help retain moisture and protect against external elements.</p>
                    <p>Dry skin requires extra hydration and gentle products that won't strip away your skin's natural oils.</p>
                `;
                
                recommendationsElement.innerHTML = `
                    <ul class="text-start">
                        <li>Use a gentle, creamy cleanser</li>
                        <li>Apply a rich moisturizer twice daily</li>
                        <li>Look for products with hyaluronic acid, glycerin, and ceramides</li>
                        <li>Use a hydrating face mask 1-2 times per week</li>
                        <li>Consider adding a facial oil to your nighttime routine</li>
                    </ul>
                `;
                
                servicesElement.innerHTML = `
                    <p>Based on your dry skin type, we recommend these Miracle Beauty Care services:</p>
                    <ul class="text-start">
                        <li><strong>Hydrating Facial Treatment</strong> - Deep moisturizing treatment to replenish your skin</li>
                        <li><strong>Moisture Infusion Therapy</strong> - Professional-grade hydration for lasting results</li>
                        <li><strong>Gentle Enzyme Peel</strong> - Removes flaky skin without irritation</li>
                    </ul>
                    <a href="{{ route('services') }}" class="btn btn-primary mt-3">View Services</a>
                `;
            } else if (skinType === 'oily') {
                resultElement.innerHTML = `
                    <h4>Your skin type is: <span class="text-primary">Oily</span></h4>
                    <p>Your skin produces excess sebum (oil), especially in the T-zone (forehead, nose, and chin). You may notice a shiny appearance and enlarged pores.</p>
                    <p>Oily skin needs products that balance oil production without over-drying.</p>
                `;
                
                recommendationsElement.innerHTML = `
                    <ul class="text-start">
                        <li>Use a gentle foaming cleanser</li>
                        <li>Apply an oil-free, non-comedogenic moisturizer</li>
                        <li>Look for products with niacinamide, salicylic acid, and tea tree oil</li>
                        <li>Use clay masks 1-2 times per week</li>
                        <li>Consider using a lightweight serum instead of heavy creams</li>
                    </ul>
                `;
                
                servicesElement.innerHTML = `
                    <p>Based on your oily skin type, we recommend these Miracle Beauty Care services:</p>
                    <ul class="text-start">
                        <li><strong>Oil Control Facial</strong> - Balances sebum production for a matte finish</li>
                        <li><strong>Deep Pore Cleansing Treatment</strong> - Removes impurities and reduces pore appearance</li>
                        <li><strong>Clarifying Chemical Peel</strong> - Helps control oil and prevent breakouts</li>
                    </ul>
                    <a href="{{ route('services') }}" class="btn btn-primary mt-3">View Services</a>
                `;
            } else if (skinType === 'combination') {
                resultElement.innerHTML = `
                    <h4>Your skin type is: <span class="text-primary">Combination</span></h4>
                    <p>Your skin has both oily and dry areas. Typically, the T-zone (forehead, nose, and chin) is oily while the cheeks and other areas are normal to dry.</p>
                    <p>Combination skin requires a balanced approach that addresses both concerns.</p>
                `;
                
                recommendationsElement.innerHTML = `
                    <ul class="text-start">
                        <li>Use a gentle, balanced cleanser</li>
                        <li>Consider multi-masking (different masks for different areas)</li>
                        <li>Look for products with hyaluronic acid, niacinamide, and antioxidants</li>
                        <li>Use lightweight, oil-free moisturizers</li>
                        <li>Consider using different products for different zones of your face</li>
                    </ul>
                `;
                
                servicesElement.innerHTML = `
                    <p>Based on your combination skin type, we recommend these Miracle Beauty Care services:</p>
                    <ul class="text-start">
                        <li><strong>Balancing Facial Treatment</strong> - Addresses both dry and oily areas</li>
                        <li><strong>Customized Multi-Zone Facial</strong> - Targets specific concerns in different areas</li>
                        <li><strong>Pore Refining Treatment</strong> - Reduces appearance of pores in oily areas</li>
                    </ul>
                    <a href="{{ route('services') }}" class="btn btn-primary mt-3">View Services</a>
                `;
            } else if (skinType === 'normal') {
                resultElement.innerHTML = `
                    <h4>Your skin type is: <span class="text-primary">Normal/Balanced</span></h4>
                    <p>Your skin is well-balanced - neither too oily nor too dry. You have few imperfections, small pores, and good circulation.</p>
                    <p>Normal skin benefits from maintenance routines that preserve its natural balance.</p>
                `;
                
                recommendationsElement.innerHTML = `
                    <ul class="text-start">
                        <li>Use a mild, pH-balanced cleanser</li>
                        <li>Apply a light, balanced moisturizer</li>
                        <li>Look for products with antioxidants and peptides</li>
                        <li>Use hydrating masks once a week</li>
                        <li>Don't forget sunscreen daily</li>
                    </ul>
                `;
                
                servicesElement.innerHTML = `
                    <p>Based on your normal skin type, we recommend these Miracle Beauty Care services:</p>
                    <ul class="text-start">
                        <li><strong>Maintenance Facial</strong> - Preserves your skin's natural balance</li>
                        <li><strong>Antioxidant Treatment</strong> - Protects skin from environmental damage</li>
                        <li><strong>Radiance Boost Therapy</strong> - Enhances your skin's natural glow</li>
                    </ul>
                    <a href="{{ route('services') }}" class="btn btn-primary mt-3">View Services</a>
                `;
            } else if (skinType === 'sensitive') {
                resultElement.innerHTML = `
                    <h4>Your skin type is: <span class="text-primary">Sensitive</span></h4>
                    <p>Your skin easily becomes red, itchy, or irritated in response to products, environment, or stress. You may also experience rosacea or eczema.</p>
                    <p>Sensitive skin requires gentle, soothing products with minimal ingredients.</p>
                `;
                
                recommendationsElement.innerHTML = `
                    <ul class="text-start">
                        <li>Use fragrance-free, hypoallergenic cleansers</li>
                        <li>Apply gentle, calming moisturizers</li>
                        <li>Look for products with aloe vera, chamomile, and oat extract</li>
                        <li>Avoid products with alcohol, fragrances, and harsh chemicals</li>
                        <li>Use mineral-based sunscreens</li>
                    </ul>
                `;
                
                servicesElement.innerHTML = `
                    <p>Based on your sensitive skin type, we recommend these Miracle Beauty Care services:</p>
                    <ul class="text-start">
                        <li><strong>Calming Sensitive Skin Facial</strong> - Reduces inflammation and soothes irritation</li>
                        <li><strong>Gentle Therapy Treatment</strong> - Uses hypoallergenic products for sensitive skin</li>
                        <li><strong>LED Red Light Therapy</strong> - Non-invasive treatment to reduce redness</li>
                    </ul>
                    <a href="{{ route('services') }}" class="btn btn-primary mt-3">View Services</a>
                `;
            }
        }

        // Generate hair quiz results
        function generateHairResults(hairType) {
            const resultElement = document.getElementById('hair-type-result');
            const recommendationsElement = document.getElementById('hair-recommendations');
            const servicesElement = document.getElementById('hair-services');
            
            // Primary hair texture types
            if (hairType === 'straight') {
                resultElement.innerHTML = `
                    <h4>Your hair type is: <span class="text-primary">Straight</span></h4>
                    <p>Your hair has no natural curl pattern and tends to lie flat. It often appears shiny as oils can travel easily from scalp to ends.</p>
                    <p>Straight hair benefits from volumizing products and regular trims to prevent flatness.</p>
                `;
                
                recommendationsElement.innerHTML = `
                    <ul class="text-start">
                        <li>Use volumizing shampoo and conditioner</li>
                        <li>Try texturizing sprays or mousses for added body</li>
                        <li>Avoid heavy oils that can weigh hair down</li>
                        <li>Use dry shampoo between washes to absorb excess oil</li>
                        <li>Consider lightweight leave-in products</li>
                    </ul>
                `;
                
                servicesElement.innerHTML = `
                    <p>Based on your straight hair type, we recommend these Miracle Beauty Care services:</p>
                    <ul class="text-start">
                        <li><strong>Volumizing Hair Treatment</strong> - Adds body and bounce to flat hair</li>
                        <li><strong>Scalp Balancing Therapy</strong> - Controls oil production</li>
                        <li><strong>Precision Haircut</strong> - Creates movement and dimension</li>
                    </ul>
                    <a href="{{ route('services') }}" class="btn btn-primary mt-3">View Services</a>
                `;
            } else if (hairType === 'wavy') {
                resultElement.innerHTML = `
                    <h4>Your hair type is: <span class="text-primary">Wavy</span></h4>
                    <p>Your hair has a gentle S-shaped pattern with natural body and movement. It falls somewhere between straight and curly.</p>
                    <p>Wavy hair benefits from products that enhance natural waves while controlling frizz.</p>
                `;
                
                recommendationsElement.innerHTML = `
                    <ul class="text-start">
                        <li>Use lightweight moisturizing shampoo and conditioner</li>
                        <li>Apply curl-enhancing cream to damp hair</li>
                        <li>Consider sea salt sprays for added texture</li>
                        <li>Use microfiber towels or t-shirts to dry hair</li>
                        <li>Apply anti-frizz serum as needed</li>
                    </ul>
                `;
                
                servicesElement.innerHTML = `
                    <p>Based on your wavy hair type, we recommend these Miracle Beauty Care services:</p>
                    <ul class="text-start">
                        <li><strong>Wave Enhancing Treatment</strong> - Defines and enhances natural wave pattern</li>
                        <li><strong>Moisture Balance Therapy</strong> - Prevents frizz without weighing hair down</li>
                        <li><strong>Beach Wave Styling</strong> - Professional styling to enhance natural texture</li>
                    </ul>
                    <a href="{{ route('services') }}" class="btn btn-primary mt-3">View Services</a>
                `;
            } else if (hairType === 'curly') {
                resultElement.innerHTML = `
                    <h4>Your hair type is: <span class="text-primary">Curly</span></h4>
                    <p>Your hair forms defined spiral or corkscrew patterns. It tends to be naturally drier as oils have difficulty traveling down the hair shaft.</p>
                    <p>Curly hair needs moisture-rich products that define curls while preventing frizz.</p>
                `;
                
                recommendationsElement.innerHTML = `
                    <ul class="text-start">
                        <li>Use sulfate-free, moisturizing shampoos</li>
                        <li>Apply rich conditioners and leave-in treatments</li>
                        <li>Try curl-defining creams or gels</li>
                        <li>Consider deep conditioning masks weekly</li>
                        <li>Use a diffuser when blow-drying</li>
                    </ul>
                `;
                
                servicesElement.innerHTML = `
                    <p>Based on your curly hair type, we recommend these Miracle Beauty Care services:</p>
                    <ul class="text-start">
                        <li><strong>Curl Hydration Treatment</strong> - Deep moisture for defined, bouncy curls</li>
                        <li><strong>DevaCut Curly Hair Cutting</strong> - Specialized cutting technique for curly hair</li>
                        <li><strong>Anti-Frizz Therapy</strong> - Smooths and defines curl pattern</li>
                    </ul>
                    <a href="{{ route('services') }}" class="btn btn-primary mt-3">View Services</a>
                `;
            } else if (hairType === 'coily') {
                resultElement.innerHTML = `
                    <h4>Your hair type is: <span class="text-primary">Coily/Kinky</span></h4>
                    <p>Your hair has a tight curl pattern forming small, springy coils. It's naturally very dry and prone to shrinkage.</p>
                    <p>Coily hair requires intense moisture and gentle handling to prevent breakage.</p>
                `;
                
                recommendationsElement.innerHTML = `
                    <ul class="text-start">
                        <li>Use creamy, moisturizing cleansers (co-washing)</li>
                        <li>Apply rich, deep conditioners frequently</li>
                        <li>Use leave-in conditioners and oils regularly</li>
                        <li>Consider the LOC method (Liquid, Oil, Cream)</li>
                        <li>Minimize heat styling and protect hair while sleeping</li>
                    </ul>
                `;
                
                servicesElement.innerHTML = `
                    <p>Based on your coily hair type, we recommend these Miracle Beauty Care services:</p>
                    <ul class="text-start">
                        <li><strong>Intensive Moisture Treatment</strong> - Deep hydration for coily hair</li>
                        <li><strong>Protective Styling Consultation</strong> - Learn best practices for protecting your hair</li>
                        <li><strong>Specialized Coily Hair Cut</strong> - Cutting techniques that work with your natural texture</li>
                    </ul>
                    <a href="{{ route('services') }}" class="btn btn-primary mt-3">View Services</a>
                `;
            }
            
            // Secondary hair characteristics (handling other types)
            else if (hairType === 'dry') {
                resultElement.innerHTML = `
                    <h4>Your hair concern is: <span class="text-primary">Dryness</span></h4>
                    <p>Your hair lacks moisture and natural oils, resulting in a rough texture and potential brittleness or frizz.</p>
                    <p>Dry hair needs intense hydration and protective products.</p>
                `;
                
                recommendationsElement.innerHTML = `
                    <ul class="text-start">
                        <li>Use sulfate-free, moisturizing shampoos</li>
                        <li>Apply rich conditioners and leave-in treatments</li>
                        <li>Use hair oils and serums regularly</li>
                        <li>Consider weekly deep conditioning treatments</li>
                        <li>Minimize heat styling and use heat protectants</li>
                    </ul>
                `;
                
                servicesElement.innerHTML = `
                    <p>Based on your dry hair concern, we recommend these Miracle Beauty Care services:</p>
                    <ul class="text-start">
                        <li><strong>Intensive Moisture Therapy</strong> - Deeply hydrates and repairs dry hair</li>
                        <li><strong>Oil Treatment Ritual</strong> - Nourishes hair with natural oils</li>
                        <li><strong>Hydrating Hair Mask</strong> - Professional-grade moisture treatment</li>
                    </ul>
                    <a href="{{ route('services') }}" class="btn btn-primary mt-3">View Services</a>
                `;
            } else if (hairType === 'oily') {
                resultElement.innerHTML = `
                    <h4>Your hair concern is: <span class="text-primary">Oiliness</span></h4>
                    <p>Your scalp produces excess sebum, causing your hair to look greasy quickly after washing.</p>
                    <p>Oily hair needs balancing products that control oil without over-drying.</p>
                `;
                
                recommendationsElement.innerHTML = `
                    <ul class="text-start">
                        <li>Use clarifying shampoos for deep cleansing</li>
                        <li>Apply conditioner only to the ends, avoiding the scalp</li>
                        <li>Try lightweight leave-in products</li>
                        <li>Use dry shampoo between washes</li>
                        <li>Consider scalp treatments to balance oil production</li>
                    </ul>
                `;
                
                servicesElement.innerHTML = `
                    <p>Based on your oily hair concern, we recommend these Miracle Beauty Care services:</p>
                    <ul class="text-start">
                        <li><strong>Scalp Balancing Treatment</strong> - Regulates oil production</li>
                        <li><strong>Clarifying Hair Therapy</strong> - Removes buildup and excess oil</li>
                        <li><strong>Volume-Boosting Blowout</strong> - Styling that adds lift at the roots</li>
                    </ul>
                    <a href="{{ route('services') }}" class="btn btn-primary mt-3">View Services</a>
                `;
            } else if (hairType === 'damaged') {
                resultElement.innerHTML = `
                    <h4>Your hair concern is: <span class="text-primary">Damage</span></h4>
                    <p>Your hair shows signs of damage from heat styling, chemical treatments, or environmental factors, resulting in breakage, split ends, or lack of elasticity.</p>
                    <p>Damaged hair needs restorative treatments and gentle handling.</p>
                `;
                
                recommendationsElement.innerHTML = `
                    <ul class="text-start">
                        <li>Use repairing shampoos and conditioners</li>
                        <li>Apply protein treatments to rebuild hair structure</li>
                        <li>Use leave-in conditioners and heat protectants</li>
                        <li>Consider bond-building treatments</li>
                        <li>Get regular trims to remove split ends</li>
                    </ul>
                `;
                
                servicesElement.innerHTML = `
                    <p>Based on your hair damage concern, we recommend these Miracle Beauty Care services:</p>
                    <ul class="text-start">
                        <li><strong>Intensive Repair Treatment</strong> - Rebuilds damaged hair structure</li>
                        <li><strong>Bond Strengthening Therapy</strong> - Reinforces hair bonds</li>
                        <li><strong>Split End Treatment</strong> - Seals and prevents split ends</li>
                    </ul>
                    <a href="{{ route('services') }}" class="btn btn-primary mt-3">View Services</a>
                `;
            } else {
                // Default for any other hair types or concerns
                resultElement.innerHTML = `
                    <h4>Your hair profile is: <span class="text-primary">${hairType.charAt(0).toUpperCase() + hairType.slice(1)}</span></h4>
                    <p>Based on your answers, we've identified specific characteristics about your hair texture and condition.</p>
                    <p>We recommend a personalized hair care routine to address your unique needs.</p>
                `;
                
                recommendationsElement.innerHTML = `
                    <ul class="text-start">
                        <li>Use products specifically formulated for your hair type</li>
                        <li>Consider a consultation with our hair specialists</li>
                        <li>Regular trims every 6-8 weeks</li>
                        <li>Use heat protectants when styling</li>
                        <li>Consider a customized treatment plan</li>
                    </ul>
                `;
                
                servicesElement.innerHTML = `
                    <p>Based on your hair profile, we recommend a personalized consultation at Miracle Beauty Care:</p>
                    <ul class="text-start">
                        <li><strong>Custom Hair Analysis</strong> - In-depth assessment of your hair needs</li>
                        <li><strong>Personalized Treatment Plan</strong> - Customized to address your specific concerns</li>
                        <li><strong>Product Recommendation Session</strong> - Expert advice on the best products for your hair</li>
                    </ul>
                    <a href="{{ route('services') }}" class="btn btn-primary mt-3">View Services</a>
                `;
            }
        }

        // Reset quiz and go back to quiz selection
        function resetQuiz() {
            // Reset answers
            skinAnswers = {};
            hairAnswers = {};
            
            // Hide quiz containers
            document.getElementById('skin-quiz-container').style.display = 'none';
            document.getElementById('hair-quiz-container').style.display = 'none';
            
            // Reset progress bars
            document.getElementById('skin-progress').style.width = '0%';
            document.getElementById('hair-progress').style.width = '0%';
            
            // Reset active questions
            const questionContainers = document.querySelectorAll('.question-container');
            questionContainers.forEach(container => {
                container.classList.remove('active');
            });
            
            // Set first questions as active
            document.getElementById('skin-q1').classList.add('active');
            document.getElementById('hair-q1').classList.add('active');
            
            // Hide result containers
            document.getElementById('skin-results').style.display = 'none';
            document.getElementById('hair-results').style.display = 'none';
            
            // Show quiz options
            document.getElementById('quiz-options').style.display = 'block';
            document.getElementById('benefits-section').style.display = 'block';
            
            // Scroll to top
            window.scrollTo(0, 0);
        }
</script>
</body>
</html>