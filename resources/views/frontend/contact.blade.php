@extends('frontend.layouts.app')
@section('content')
    <!-- breadcrumb section start -->
    <section class="breadcrump-sec sec-padding">
        <div class="container">
            <div class="breadcrumb-text t-center">
                <h2>Contact Us</h2>
                <span><a href="index">Home</a> / </span>
                <span class="disabled">Contact Us</span>
            </div>
        </div>
    </section>
    <!-- breadcrumb section end -->

    <!-- contact section start  -->
    <section class="contact-sec sec-padding">
        <div class="container">
            <div class="title">
                <h2><span>Contact</span> With Us</h2>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <form action="#" class="contact-form">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" id="email">
                        </div>
                        <div class="form-group">
                            <label for="sub">Subject</label>
                            <input type="text" id="sub">
                        </div>
                        <div class="form-group">
                            <label for="msg">Message</label>
                            <textarea id="msg"></textarea>
                        </div>
                        <div class="form-group btn btn-primary btn-success">
                            <input type="submit" value="Send Message">
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-6">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423283.43556693953!2d-118.69192993092697!3d34.0207304944894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1637394651019!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section end  -->
@endsection
