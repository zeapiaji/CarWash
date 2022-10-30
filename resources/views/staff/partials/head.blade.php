<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Car Wash</title>
    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('member/assets/images/icons/map.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('member/assets/images/icons/map.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('member/assets/images/icons/map.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('member/assets/images/icons/map.png')}}">
    <link rel="manifest" href="{{ asset('admin/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{asset('member/assets/images/icons/map.png')}}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('admin/assets/js/config.js') }}"></script>
    <script src="{{ asset('vendors/overlayscrollbars/OverlayScrollbars.min.js') }}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="stylesheet" href="{{asset('admin/vendors/leaflet/leaflet.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/vendors/leaflet.markercluster/MarkerCluster.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/vendors/leaflet.markercluster/MarkerCluster.Default.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" id="style-rtl" href="{{ asset('admin/assets/css/theme-rtl.min.css')}}">
    <link rel="stylesheet" id="style-default" href="{{ asset('admin/assets/css/theme.min.css')}}">
    <link rel="stylesheet" id="user-style-rtl" href="{{ asset('admin/assets/css/user-rtl.min.css')}}">
    <link rel="stylesheet" id="user-style-default" href="{{ asset('admin/assets/css/user.min.css')}}">
    <link href="{{asset('admin/vendors/dropzone/dropzone.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('admin/vendors/flatpickr/flatpickr.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/choices/choices.min.css')}}">

    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        /* Firefox */
        input[type=number] {
        -moz-appearance: textfield;
        }
    </style>

    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
          var linkDefault = document.getElementById('style-default');
          var userLinkDefault = document.getElementById('user-style-default');
          linkDefault.setAttribute('disabled', true);
          userLinkDefault.setAttribute('disabled', true);
          document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
          var linkRTL = document.getElementById('style-rtl');
          var userLinkRTL = document.getElementById('user-style-rtl');
          linkRTL.setAttribute('disabled', true);
          userLinkRTL.setAttribute('disabled', true);
        }
    </script>

</head>
