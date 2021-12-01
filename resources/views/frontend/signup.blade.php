<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Instalpay</title>

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    <!-- google fonts  -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;600&family=Montserrat:wght@400;500&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/slick.css"/>

    <!-- grid css -->
    <link rel="stylesheet" href="css/custom-grid.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-gray">
    <div class="translator">
        <div id="google_translate_element"></div>
    </div>
    <!-- translator section end -->

    <!-- header section start -->
    <header class="header-sec bg-white signup-header" id="hover-header">
        <div class="container">
            <nav class="p-relative">
                <div class="row mobile-row align-center">
                    <div class="col-6 col-lg-6 logo">
                        <!-- logo -->
                        <a href="index.php" id="hover-logo">
                            <img src="images/INSTALPAY.png" alt="logo">
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- header section end -->

    <!-- Registration-category section end -->
    <section class="registration-category sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="register-item bg-white t-center">
                        <a href="#" class="register-tab active" data-toggle-target=".content-1">
                            <i class="fas fa-users"></i>
                            <h2>Register As Merchant</h2>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="register-item bg-white t-center">
                        <a href="#" class="register-tab" data-toggle-target=".content-2">
                            <i class="fas fa-users"></i>
                            <h2>Register As User</h2>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="register-item bg-white t-center">
                        <a href="#" class="register-tab" data-toggle-target=".content-3">
                            <i class="fas fa-users"></i>
                            <h2>Register As Developer</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Registration-category section end -->

    <!-- Registration form start -->
    <div class="registration-form bg-white m-auto register-content content-1 active">
        <h2>Merchant Register Form</h2>
        <form action="">
            <div class="form-group">
                <label for="name">Name*</label>
                <div class="group d-md-flex justify-between">
                    <div>
                        <input type="text" id="name">
                        <p>First Name</p>
                    </div>
                    <div>
                        <input type="text">
                        <p>Last Name</p>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email Address*</label>
                <input type="email" id="email">
            </div>
            <div class="form-group">
                <label for="number">Phone Number*</label>
                <input type="text" id="number">
            </div>
            <div class="form-group">
                <input type="submit" value="continue">
            </div>
            <span class="log-in">Already have an account ? <a href="login.html">Login Now</a></span>
        </form>
    </div>
    <!-- Registration form end -->

    <div class="registration-form bg-white m-auto register-content content-2">
        <h2>User Register Form</h2>
        <form action="">
            <div class="form-group">
                <label for="name">Name*</label>
                <div class="group d-md-flex justify-between">
                    <div>
                        <input type="text" id="name">
                        <p>First Name</p>
                    </div>
                    <div>
                        <input type="text">
                        <p>Last Name</p>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email Address*</label>
                <input type="email" id="email">
            </div>
            <div class="form-group">
                <label for="number">Phone Number*</label>
                <input type="text" id="number">
            </div>
            <div class="form-group">
                <input type="submit" value="continue">
            </div>
            <span class="log-in">Already have an account ? <a href="login.html">Login Now</a></span>
        </form>
    </div>

    <div class="registration-form bg-white m-auto register-content content-3">
        <h2>Developer Register Form</h2>
        <form action="">
            <div class="form-group">
                <label for="name">Name*</label>
                <div class="group d-md-flex justify-between">
                    <div>
                        <input type="text" id="name">
                        <p>First Name</p>
                    </div>
                    <div>
                        <input type="text">
                        <p>Last Name</p>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email Address*</label>
                <input type="email" id="email">
            </div>
            <div class="form-group">
                <label for="number">Phone Number*</label>
                <input type="text" id="number">
            </div>
            <div class="form-group">
                <input type="submit" value="continue">
            </div>
            <span class="log-in">Already have an account ? <a href="login.html">Login Now</a></span>
        </form>
    </div>

    <!-- footer section start  -->
    <footer class="footer-sec">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-3 mb-3 mb-0-lg">
                    <div class="page-link">
                        <h5 class="footer-title">Pages</h5>
                        <ul>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="signup.html">Signup</a></li>
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="category.html">Category</a></li>
                            <li><a href="service.html">Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3 mb-3 mb-0-lg">
                    <div class="page-link">
                        <h5 class="footer-title">Chi siamo</h5>
                        <ul>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Partner</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Login to customer account</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3 mt-3-md mb-3 mb-0-lg mt-0-xl">
                    <div class="footer-about">
                        <img src="images/INSTALPAYf.png" alt="logo" class="w-100">
                        <p>Instalpay fornisce prestiti per servizi quali idraulici , elettricisti , imbianchini , gommisti , traslochi  o prestiti online e in negozio in modo che gli acquirenti possono <a href="about.html">Read More</a></p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3 mt-3-md mb-3 mb-0-lg mt-0-xl">
                    <div class="contact-info">
                        <h5 class="footer-title">Contact Info</h5>
                        <ul class="contact">
							<li>
								<span><i class="fas fa-map-marker-alt"></i></span>
								<span>Address </span>
								<span class="address">instalpay 41 Devonshire Street, Ground Floor, London, England, W1G 7AJ</span>
							</li>
                            <li>
                                <span><i class="fas fa-phone"></i></span>
                                <span>Phone </span>
                                <span><a href="#">+923 111 111 444</a></span>
                            </li>
                            <li>
                                <span><i class="fab fa-whatsapp"></i></span>
                                <span>Whatsapp </span>
                                <span><a href="#">+923 111 111 444</a></span>
                            </li>
                            <li>
                                <span><i class="far fa-envelope"></i></span>
                                <span>Email </span>
                                <span><a href="mailto:">+923 111 111 444</a></span>
                            </li>
                        </ul>

                        <ul class="social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
			<div class="copyright-text">
                <p>
                    &copy; 2021 <a href="index.html">instalpay LTD</a> All Rights Reserved
                </p>
            </div>
        </div>
    </footer>
    <!-- footer section end  -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="js/custom.js"></script>

</body>
</html>