<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>


    <title>Instalpay</title>

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    <!-- google fonts  -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;600&family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">  

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/ticker.min.css"/>

    <!-- grid css -->
    <link rel="stylesheet" href="css/custom-grid.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- popup section start -->
    <!-- <section class="popup-sec-bg" id="popup-sec">
        <div class="popup-sec">
            <div class="cross-btn" id="cross-btn">
                <i class="fas fa-times"></i>
            </div>
            <div class="container">
                <img src="images/INSTALPAY.png" alt="logo" class="w-100">
                <p>Indirizziamo clienti qualificati instalpay verso i vostri siti attraverso campagne di marketing cross-merchant</p>
                <div class="btn">
                    <a href="signup">SignUp Now</a>
                </div>
            </div>
        </div>
    </section> -->
    <!-- popup section end -->

    <!-- translator section start -->
    <div class="translator">
        <div id="google_translate_element"></div>
    </div>
    <!-- translator section end -->

    <!-- header section -->
    @include('frontend.partials.header')
    <!-- header section end -->

    <!-- main section -->
    @yield('content')
    <!-- main section end -->

    <!-- footer section -->
    @include('frontend.partials.footer')
    <!-- footer section end -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/ticker.min.js"></script>
    <script src="js/jquery.plate.js"></script>
    <script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="js/custom.js"></script>

    <!-- here goes all exta js scripts-->
    @yield('extra-script')

</body>
</html>
