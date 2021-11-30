@extends('frontend.layouts.app')
@section('content')

    <!-- kit-qr section start -->
    <section class="kit-qr sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mb-3 mb-0-md">
                    <div class="kit-text">
                        <h2>John Doe</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus culpa est iste expedita esse accusamus amet ipsa accusantium</p>
                        <div class="kit-list">
                            <ul>
                                <li>
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
                                </li>
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

@section('extra-script')
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
@endsection
@endsection


