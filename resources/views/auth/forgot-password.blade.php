<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

    <!-- Title -->
    <title>Reset Password</title>

    <!--- Favicon --->
    <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/x-icon"/>

    <!--- Icons css --->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
    <!--- Style css --->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body class="main-body">

<!-- Loader -->
<div id="global-loader">
    <img src="{{ asset('assets/img/loader.svg') }}" class="loader-img" alt="Loader">
</div>
<!-- /Loader -->

<!-- Page -->
<div class="page">

    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
                <div class="row wd-100p mx-auto text-center">
                    <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
                        <img src="{{ asset('assets/img/main1.jpeg') }}" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                    </div>
                </div>
            </div>
            <!-- The content half -->
            <div class="col-md-6 col-lg-6 col-xl-5 bg-white">
                <div class="login d-flex align-items-center py-2">
                    <!-- Demo content-->
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                <div class="mb-5 d-flex"> <a href="index.html"><img src="../../assets/img/brand/favicon.png" class="sign-favicon ht-40" alt="logo"></a><h1 class="main-logo1 ml-1 mr-0 my-auto tx-28">Va<span>le</span>x</h1></div>
                                <div class="main-card-signin d-md-flex bg-white">
                                    <div class="wd-100p">
                                        <div class="main-signin-header">
                                            <h2>Forgot Password!</h2>
                                            <h4>Please Enter Your Email</h4>
                                            <form action="{{ route('password.request') }}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label>Email</label> <input class="form-control" name="email" placeholder="Enter your email" type="text" value="{{ old('email') }}">
                                                </div>
                                                @error('email')
                                                <div class="alert alert-danger  mg-b-0" role="alert">
                                                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    {{$message}}
                                                </div>
                                                @enderror
                                                <button class="btn btn-main-primary btn-block">Send</button>
                                            </form>
                                        </div>
                                        <div class="main-signup-footer mg-t-20">
                                            <p><a href="/"> Send me back</a> to the sign in screen.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End -->
                </div>
            </div><!-- End -->
        </div>
    </div>

</div>
<!-- JQuery min js -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- custom js -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
