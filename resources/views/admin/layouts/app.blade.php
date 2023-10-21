<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">  
    <link rel="stylesheet" href={{ asset("plugins/bootstrap/dist/css/bootstrap.min.css") }}>
    <link rel="stylesheet" href={{ asset("plugins/fontawesome-free/css/all.min.css") }}>
    <link rel="stylesheet" href={{ asset("plugins/icon-kit/dist/css/iconkit.min.css") }}>
    <link rel="stylesheet" href={{ asset("plugins/ionicons/dist/css/ionicons.min.css") }}>
    <link rel="stylesheet" href={{ asset("plugins/perfect-scrollbar/css/perfect-scrollbar.css") }}>
    <link rel="stylesheet" href={{ asset("plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css") }}>
    <link rel="stylesheet" href={{ asset("plugins/jvectormap/jquery-jvectormap.css") }}>
    <link rel="stylesheet" href={{ asset("plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css") }}>
    <link rel="stylesheet" href={{ asset("plugins/weather-icons/css/weather-icons.min.css") }}>
    <link rel="stylesheet" href={{ asset("plugins/c3/c3.min.css") }}>
    <link rel="stylesheet" href={{ asset("plugins/owl.carousel/dist/assets/owl.carousel.min.css") }}>
    <link rel="stylesheet" href={{ asset("plugins/owl.carousel/dist/assets/owl.theme.default.min.css") }}>
    <link rel="stylesheet" href={{ asset("dist/css/theme.min.css") }}>
    <script src={{ asset("src/js/vendor/modernizr-2.8.3.min.js") }}></script>
    <link rel="stylesheet" href={{ asset("plugins/mohithg-switchery/dist/switchery.min.css") }}>
    <link rel="stylesheet" href={{ asset("plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css") }}>
    <link rel="stylesheet" href={{ asset("plugins/summernote/dist/summernote-bs4.css") }}>
    <link rel="stylesheet" href={{ asset("plugins/select2/dist/css/select2.min.css") }}>
    <title>Document</title>
</head>


<body>
    <div class="wrapper">
        @include('admin.layouts.header')
        <div class="page-wrap">
            @include('admin.layouts.sidebar')
            @yield('content')
            @include('admin.layouts.footer')
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
    <script src={{ asset("plugins/popper.js/dist/umd/popper.min.js") }}></script>
    <script src={{ asset("plugins/bootstrap/dist/js/bootstrap.min.js") }}></script>
    <script src={{ asset("plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js") }}></script>
    <script src={{ asset("plugins/screenfull/dist/screenfull.js") }}></script>
    <script src={{ asset("plugins/datatables.net/js/jquery.dataTables.min.js") }}></script>
    <script src={{ asset("plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js") }}></script>
    <script src={{ asset("plugins/datatables.net-responsive/js/dataTables.responsive.min.js") }}></script>
    <script src={{ asset("plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js") }}></script>
    <script src={{ asset("plugins/jvectormap/jquery-jvectormap.min.js") }}></script>
    <script src={{ asset("plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js") }}></script>
    <script src={{ asset("plugins/moment/moment.js") }}></script>
    <script src={{ asset("plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js") }}></script>
    <script src={{ asset("plugins/d3/dist/d3.min.js") }}></script>
    <script src={{ asset("plugins/c3/c3.min.js") }}></script>
    <script src={{ asset("js/tables.js") }}></script>
    <script src={{ asset("js/widgets.js") }}></script>
    <script src={{ asset("js/charts.js") }}></script>
    <script src={{ asset("dist/js/theme.min.js") }}></script>
    <script src={{ asset("plugins/summernote/dist/summernote-bs4.min.js") }}></script>
    <script src={{ asset("js/form-advanced.js") }}></script>
    <script src={{ asset("plugins/jquery.repeater/jquery.repeater.min.js") }}></script>
    <script src={{ asset("plugins/select2/dist/js/select2.min.js") }}></script>
    <script src={{ asset("plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js") }}></script>
    <script src={{ asset("plugins/mohithg-switchery/dist/switchery.min.js") }}></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 

    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
</body>
</html>