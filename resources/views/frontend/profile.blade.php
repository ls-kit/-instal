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
                            <img src="images/INSTALPAY.png" alt="logo" >
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- header section end -->

    <!-- kit-qr section start -->
    <section class="kit-qr sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mb-3 mb-0-md">
                    <div class="kit-text">
                        <h2>Inserisci si tuoi dati per Vedere se sei idoneo</h2>
                        <div class="kit-list">
                            <ul>

                                <li>
                                    <span><i class="fas fa-user"></i> nome</span>
                                    <span></span>
                                </li> 
                                <li>
                                    <span><i class="fas fa-user"></i> cognome</span>
                                    <span></span>
                                </li> 
                                <li>
                                    <span><i class="fas fa-circle"></i> codice fiscale</span>
                                    <span></span>
                                </li> 
                                <li>
                                    <span><i class="fas fa-phone-alt"></i> N. Cellulare</span>
                                    <span></span>
                                </li> 
                                <li>
                                    <span><i class="fas fa-home"></i> N. Casa</span>
                                    <span></span>
                                </li> 
                                <li>
                                    <span><i class="fas fa-home"></i> Indirizzo</span>
                                    <span></span>
                                </li> 
                                
                                <!-- <li>
                                    <span><i class="far fa-calendar-alt"></i></span>
                                    <span>31 Dec, 1995</span>
                                </li>
                                <li>
                                    <span><i class="fas fa-phone-alt"></i></span>
                                    <span>+858 4174 4567</span>
                                </li>
                                <li>
                                    <span><i class="far fa-envelope"></i></span>
                                    <span>john@gmail.com</span>
                                </li>
                                <li>
                                    <span><i class="fas fa-home"></i></span>
                                    <span>21Street, CA</span>
                                </li>
                                <li>
                                    <span><i class="fas fa-home"></i></span>
                                    <span>Loan Eligibility : Check QR Code</span>
                                </li> -->
                            </ul>
                        </div>
                        <div class="btn btn-success mt-2 mb-2">
                            <a href="#" class="qr-btn" onclick="generateQRCode()">Generate</a>
                        </div>

                        <p id="qr-text" class="d-none">Verified, You are eligible to get loan</p>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="kit-img">
                        <p id="qr-result">This is deault QR code:</p>
                        <img id="kit-qr-img" src="images/qr.png" alt="image" class="w-80">
                        <canvas id="qr-code" class="d-none w-80"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- kit-qr section end -->

    <!-- footer section start  -->
    <footer class="footer-sec">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-3 mb-3 mb-0-lg">
                    <div class="page-link">
                        <div class="footer-title footer-about">
                            <img src="images/INSTALPAYf.png" alt="logo" class="w-100">
                        </div>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="contact">Contatto</a></li>
                            <li><a href="about">About</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3 mb-3 mb-0-lg">
                    <div class="page-link">
                        <h5 class="footer-title">Login</h5>
                        <ul>
                            <li><a href="login">Cliente</a></li>
                            <li><a href="login">Consumatori</a></li>
                            <li><a href="login">Mercante</a></li>
                            <li><a href="login">Sviluppatore</a></li>
                            <li><a href="login">Inventario </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3 mt-3-md mb-3 mb-0-lg mt-0-xl">
                    <div class="contact-info">
                        <h5 class="footer-title">Informazioni di contatto</h5>
                        <ul class="contact">
                            <li>
                                <span><i class="fas fa-map-marker-alt"></i></span>
                                <span>Indirizzo</span>
                                <span class="address">instalpay 41 Devonshire Street, Ground Floor, London, England, W1G 7AJ</span>
                            </li>
                            <li>
                                <span><i class="fas fa-phone"></i></span>
                                <span>Telefono</span>
                                <span><a href="#">+923 111 111 444</a></span>
                            </li>
                            <li>
                                <span><i class="fab fa-whatsapp"></i></span>
                                <span>Whatsapp </span>
                                <span><a href="#">+923 111 111 444</a></span>
                            </li>
                            <li>
                                
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3 mt-3-md mb-3 mb-0-lg mt-0-xl">
                    <div class="contact-info">
                        <h5 class="footer-title">Connettiti con noi</h5>
                        <ul>
                            <li>
                                <span><i class="far fa-envelope"></i></span>
                                <span>Email </span>
                                <span><a href="mailto:">info@instalpay.net</a></span>
                            </li>
                        </ul>
                        <ul class="social mt-1">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright-text t-center mt-1">
                <p>
                    &copy; 2021 <a href="index">instalpay LTD</a> Tutti i diritti riservati 
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
    <script>
    /* JS comes here */
    var qr;
    (function() {
        qr = new QRious({
            element: document.getElementById('qr-code'),
            size: 200,
            foreground: "white"
        });
    })();

    function generateQRCode() {
        var qrtext = document.getElementById("qr-text").innerHTML;
        var qrImg = document.getElementById("kit-qr-img");
        var qrcode = document.getElementById("qr-code");
        document.getElementById("qr-result").innerHTML = "QR code for " + qrtext +":";
        // alert(qrtext);
        qrImg.style.display = "none";
        qrcode.style.display = "block";
        qr.set({
            foreground: "black",
            size: 200,
            value: qrtext
        });
    }
    </script>

</body>
</html>