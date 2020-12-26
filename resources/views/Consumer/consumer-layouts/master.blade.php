<!DOCTYPE html>
<html>

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Selamat Datang di Toko Rizky Buah | Selamat Berbelanja</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('ThemeCons/img/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('ThemeCons/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('ThemeCons/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('ThemeCons/vendor/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('ThemeCons/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('ThemeCons/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('ThemeCons/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('ThemeCons/vendor/magnific-popup/magnific-popup.min.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('ThemeCons/css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('ThemeCons/css/theme-elements.css')}}">
    <link rel="stylesheet" href="{{asset('ThemeCons/css/theme-blog.css')}}">
    <link rel="stylesheet" href="{{asset('ThemeCons/css/theme-shop.css')}}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{asset('ThemeCons/vendor/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('ThemeCons/vendor/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" href="{{asset('ThemeCons/vendor/rs-plugin/css/navigation.css')}}">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('ThemeCons/css/skins/skin-one-page-agency.css')}}">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{asset('ThemeCons/css/demos/demo-one-page-agency.css')}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('ThemeCons/css/custom.css')}}">

    <!-- Head Libs -->
    <script src="{{asset('ThemeCons/vendor/modernizr/modernizr.min.js')}}"></script>

</head>

<body data-spy="scroll" data-target=".wrapper-spy" data-offset="100">

    <div class="body">
        @include('Consumer.consumer-layouts.navigation')
        <div role="main" class="main">

            @yield('content')

        </div>
    </div>
    @include('Consumer.consumer-layouts.footer')

    <!-- Vendor -->
    <script src="{{asset('ThemeCons/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('ThemeCons/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
    <script src="{{asset('ThemeCons/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('ThemeCons/vendor/jquery-cookie/jquery-cookie.min.js')}}"></script>
    <script src="{{asset('ThemeCons/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('ThemeCons/vendor/common/common.min.js')}}"></script>
    <script src="{{asset('ThemeCons/vendor/jquery.validation/jquery.validation.min.js')}}"></script>
    <script src="{{asset('ThemeCons/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js')}}"></script>
    <script src="{{asset('ThemeCons/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
    <script src="{{asset('ThemeCons/vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
    <script src="{{asset('ThemeCons/vendor/isotope/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('ThemeCons/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('ThemeCons/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('ThemeCons/vendor/vide/vide.min.js')}}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('ThemeCons/js/theme.js')}}"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{asset('ThemeCons/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('ThemeCons/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{asset('ThemeCons/js/views/view.contact.js')}}"></script>

    <!-- Demo -->
    <script src="{{asset('ThemeCons/js/demos/demo-one-page-agency.js')}}"></script>

    <!-- Theme Custom -->
    <script src="{{asset('ThemeCons/js/custom.js')}}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{asset('ThemeCons/js/theme.init.js')}}"></script>


    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script>
        /*
			Map Settings

				Find the Latitude and Longitude of your address:
					- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

        // Map Markers
        var mapMarkers = [{
            address: "New York, NY 10017",
            html: "<strong>Porto One Page Agency</strong><br>New York, NY 10017",
            icon: {
                image: "{{asset('img/pin.png')}}",
                iconsize: [26, 46],
                iconanchor: [12, 46]
            },
            popup: true
        }];

        // Map Initial Location
        var initLatitude = 40.75198;
        var initLongitude = -73.96978;

        // Map Extended Settings
        var mapSettings = {
            controls: {
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: true,
                streetViewControl: true,
                overviewMapControl: true
            },
            scrollwheel: false,
            markers: mapMarkers,
            latitude: initLatitude,
            longitude: initLongitude,
            zoom: 16
        };

        var map = $('#googlemaps').gMap(mapSettings),
            mapRef = $('#googlemaps').data('gMap.reference');

        // Map Center At
        var mapCenterAt = function(options, e) {
            e.preventDefault();
            $('#googlemaps').gMap("centerAt", options);
        }

        var mapRef = $('#googlemaps').data('gMap.reference');

        // Styles from https://snazzymaps.com/
        var styles = [{
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{
                "color": "#e9e9e9"
            }, {
                "lightness": 17
            }]
        }, {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [{
                "color": "#f5f5f5"
            }, {
                "lightness": 20
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [{
                "color": "#ffffff"
            }, {
                "lightness": 17
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [{
                "color": "#ffffff"
            }, {
                "lightness": 29
            }, {
                "weight": 0.2
            }]
        }, {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [{
                "color": "#ffffff"
            }, {
                "lightness": 18
            }]
        }, {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [{
                "color": "#ffffff"
            }, {
                "lightness": 16
            }]
        }, {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [{
                "color": "#f5f5f5"
            }, {
                "lightness": 21
            }]
        }, {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [{
                "color": "#dedede"
            }, {
                "lightness": 21
            }]
        }, {
            "elementType": "labels.text.stroke",
            "stylers": [{
                "visibility": "on"
            }, {
                "color": "#ffffff"
            }, {
                "lightness": 16
            }]
        }, {
            "elementType": "labels.text.fill",
            "stylers": [{
                "saturation": 36
            }, {
                "color": "#333333"
            }, {
                "lightness": 40
            }]
        }, {
            "elementType": "labels.icon",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [{
                "color": "#f2f2f2"
            }, {
                "lightness": 19
            }]
        }, {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [{
                "color": "#fefefe"
            }, {
                "lightness": 20
            }]
        }, {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [{
                "color": "#fefefe"
            }, {
                "lightness": 17
            }, {
                "weight": 1.2
            }]
        }];

        var styledMap = new google.maps.StyledMapType(styles, {
            name: 'Styled Map'
        });

        mapRef.mapTypes.set('map_style', styledMap);
        mapRef.setMapTypeId('map_style');

        // Change Center Position
        if ($(window).width() > 767) {
            if ($('html[dir="rtl"]').get(0)) {
                mapRef.panBy(250, 0);
            } else {
                mapRef.panBy(-250, 0);
            }
        }
    </script>


    <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->


</body>

</html>