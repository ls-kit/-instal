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
                <div class="col-12 col-md-7 mb-3 mb-0-md">
                    <div class="kit-text">
                        <h2>Inserisci si tuoi dati per Vedere se sei idoneo</h2>
                        <div class="profile-form">
                            <form action="#">
                                <div class="form-group">
                                    <label for=""><i class="fas fa-user"></i> nome</label>
                                    <input type="text" placeholder="nome">
                                </div>
                                <div class="form-group">
                                    <label for=""><i class="fas fa-user"></i> cognome</label>
                                    <input type="text" placeholder="cognome">
                                </div>
                                <div class="form-group">
                                    <label for=""><i class="fas fa-circle"></i> codice fiscale</label>
                                    <input type="number" placeholder="codice fiscale">
                                </div>
                                <div class="form-group">
                                    <label for=""><i class="fas fa-phone-alt"></i> N. Cellulare</label>
                                    <input type="text" placeholder="N. Cellulare">
                                </div>
                                <div class="form-group">
                                    <label for=""><i class="fas fa-home"></i> N. Casa</label>
                                    <input type="text" placeholder="N. Casa">
                                </div>
                                <div class="form-group">
                                    <label for=""><i class="fas fa-map-marker-alt"></i> Indirizzo</label>
                                    <input type="text" placeholder="Indirizzo">
                                </div>
                                <div class="btn btn-success">
                                    <input type="submit" class="qr-btn" onclick="generateQRCode()" value="Generate">
                                </div>
                            </form>
                        </div>
                        <p id="qr-text" class="d-none">Verified, You are eligible to get loan</p>
                    </div>
                </div>
                <div class="col-12 col-md-5">
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
    <footer class="footer-area">
        <div class="footer-sec">
            <div class="container">
                <div class="footer-logo mb-2">
                    <img src="images/INSTALPAYf.png" alt="logo" class="w-100">
                    <div class="contact-info">
                        <ul class="social mt-1">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="mailto:"><i class="far fa-envelope"></i> info@instalpay.net</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row top pb-2">
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="page-link">
                            <h5 class="footer-title">Pages</h5>
                            <ul>
                                <li><a href="about">Chi Siamo</a></li>
                                <li><a href="#">Come Funziona</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="login">Login Sviluppatori</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="page-link">
                            <h5 class="footer-title">Cliente</h5>
                            <ul>
                                <li><a href="#">Acqvista</a></li>
                                <li><a href="service">Servizi</a></li>
                                <li><a href="#">Assisrenza</a></li>
                                <li><a href="signup">Registrati </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="page-link">
                            <h5 class="footer-title">Venditori</h5>
                            <ul>
                                <li><a href="#">Vendi Con Instalpay</a></li>
                                <li><a href="#">Assistenza</a></li>
                                <li><a href="#">Portale svicuppatori</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
        
                <div class="row mt-2">
                    <div class="col-12 col-md-8">
                        <div class="contact-info">
                            <h5 class="footer-title">Informazioni di contatto</h5>
                            <ul class="contact">
                                <li>
                                    <span><i class="fas fa-map-marker-alt"></i></span>
                                    <span>Indirizzo</span>
                                    <span class="address">instalpay 41 Devonshire Street, Ground Floor, London, England, W1G 7AJ</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-relative">
                        <div class="chat">
                            <a href="#">Chat Now</a>
                        </div>
                    </div>
                </div>       
            </div>
        </div>
        <div class="copyright-text">
            <div class="container">
                <p>
                    &copy; 2021 <a href="index.php">instalpay LTD</a> Tutti i diritti riservati 
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