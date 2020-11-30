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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('theme/flat/assets/images/logo2.png') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/bower_components/bootstrap/css/bootstrap.min.css') }}">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/flat/assets/icon/themify-icons/themify-icons.css') }}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/flat/assets/icon/icofont/css/icofont.css') }}">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/flat/assets/pages/flag-icon/flag-icon.min.css') }}">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/flat/assets/pages/menu-search/css/component.css') }}">
    <!-- Horizontal-Timeline css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/flat/assets/pages/dashboard/horizontal-timeline/css/style.css') }}">
    <!-- amchart css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/flat/assets/pages/dashboard/amchart/css/amchart.css') }}">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/flat/assets/pages/flag-icon/flag-icon.min.css') }}">
    <!-- Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/flat/assets/icon/material-design/css/material-design-iconic-font.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/flat/assets/icon/font-awesome/css/font-awesome.min.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/flat/assets/css/style.css') }}">
    <!--color css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/flat/assets/css/linearicons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/flat/assets/css/simple-line-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/flat/assets/css/ionicons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/flat/assets/css/jquery.mCustomScrollbar.css') }}">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/flat/assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">

</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <!-- Menu header start -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <!-- top navigation -->
            @include('Administrator.admin-layouts.navigation')
            <!-- /top navigation -->

            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!-- Star Side Bar Nav -->
                    @include('Administrator.admin-layouts.sidebar')
                    <!-- End Side Bar Nav -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- page content -->
                                    @yield('content')
                                    <!-- /page content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Ends -->
    <!-- Required Jqurey -->
    <script type="text/javascript" src="{{ asset('theme/bower_components/jquery/js/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/bower_components/popper.js/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('theme/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('theme/bower_components/modernizr/js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/bower_components/modernizr/js/css-scrollbars.js') }}"></script>
    <!-- classie js -->
    <script type="text/javascript" src="{{ asset('theme/bower_components/classie/js/classie.js') }}"></script>
    <!-- Rickshow Chart js -->
    <script src="{{ asset('theme/bower_components/d3/js/d3.js') }}"></script>
    <script src="{{ asset('theme/bower_components/rickshaw/js/rickshaw.js') }}"></script>
    <!-- Morris Chart js -->
    <script src="{{ asset('theme/bower_components/raphael/js/raphael.min.js') }}"></script>
    <script src="{{ asset('theme/bower_components/morris.js/js/morris.js') }}"></script>
    <!-- Horizontal-Timeline js -->
    <script type="text/javascript" src="{{ asset('theme/flat/assets/pages/dashboard/horizontal-timeline/js/main.js') }}"></script>
    <!-- amchart js -->
    <script type="text/javascript" src="{{ asset('theme/flat/assets/pages/dashboard/amchart/js/amcharts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/flat/assets/pages/dashboard/amchart/js/serial.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/flat/assets/pages/dashboard/amchart/js/light.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/flat/assets/pages/dashboard/amchart/js/custom-amchart.js') }}"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{ asset('theme/bower_components/i18next/js/i18next.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/bower_components/jquery-i18next/js/jquery-i18next.min.js') }}"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="{{ asset('theme/flat/assets/pages/dashboard/custom-dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/flat/assets/js/script.js') }}"></script>
    <script src="{{ asset('theme/flat/assets/pages/data-table/js/data-table-custom.js') }}"></script>

    <!-- pcmenu js -->
    <script src="{{ asset('theme/flat/assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('theme/flat/assets/js/demo-12.js') }}"></script>
    <script src="{{ asset('theme/flat/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('theme/flat/assets/js/jquery.mousewheel.min.js') }}"></script>

    <!-- data-table js -->
    <script src="{{ asset('theme/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('theme/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('theme/flat/assets/pages/data-table/js/jszip.min.js') }}"></script>
    <script src="{{ asset('theme/flat/assets/pages/data-table/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('theme/flat/assets/pages/data-table/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('theme/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('theme/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('theme/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('theme/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('theme/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
</body>

</html>