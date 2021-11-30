@extends('frontend.layouts.app')
@section('content')
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
@endsection
