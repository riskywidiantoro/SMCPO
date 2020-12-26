<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ config('app.name') }}</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">
    <!-- Favicon icon -->

    <link rel="icon" href="{{ asset('theme/flat/assets/images/logo2.png')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/flat/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/flat/assets/icon/icofont/css/icofont.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/flat/assets/css/style.css')}}">
    <!-- color .css -->

</head>

<body class="fix-menu">
    <section class="login p-fixed d-flex text-center common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body">
                        <form class="md-float-material">
                            <div class="text-center">
                                <img src="{{ asset('theme/flat/assets/images/logosm.png')}}" alt="logo.png">
                            </div>
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h4 class="text-center txt-primary">Pilih Metode Masuk Aplikasi</h4>
                                    </div>
                                </div>
                                <hr />
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <a href="{{route ('consumer.home')}}" type="button" class="btn btn-danger btn-md btn-block waves-effect text-center m-b-10">Consumer</a>
                                        <p class="atau"> Atau </p>
                                        <a href="{{route ('admin.dashboard')}}" type="button" class="btn btn-danger btn-md btn-block waves-effect text-center m-b-20">Administrator</a>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-inverse text-center m-b-0">Consumer Promo Outlet</p>
                                        <p class="text-inverse text-center"><b>PT. Surya Madistrindo</b></p>
                                    </div>
                                </div>

                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="{{ asset('theme/flat/assets/images/browser/chrome.png')}}" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="{{ asset('theme/flat/assets/images/browser/firefox.png ')}}" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="{{ asset('theme/flat/assets/images/browser/opera.png ')}}" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="{{ asset('theme/flat/assets/images/browser/safari.png ')}}" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="{{ asset('theme/flat/assets/images/browser/ie.png ')}}" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('theme/bower_components/jquery/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme/bower_components/popper.js/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('theme/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('theme/bower_components/modernizr/js/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme/bower_components/modernizr/js/css-scrollbars.js')}}"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{ asset('theme/bower_components/i18next/js/i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
    <!-- Custom js -->
    <!--<script type="text/javascript" src="{{ asset('theme/flat/assets/js/script.js')}}"></script>-->
    <!---- color js --->
    <script type="text/javascript" src="{{ asset('theme/flat/assets/js/common-pages.js')}}"></script>
</body>

</html>