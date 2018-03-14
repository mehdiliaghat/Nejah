<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nejah</title>
    <link href="{{ asset('plugins/bootstrap/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/pace/pace-theme-big-counter.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/main-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/morris/morris-0.4.3.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" />

    <link href="{{ asset('css/dropzone.css') }}" rel="stylesheet" />

</head>
<body>
<section id="wrapper" class="">
     @yield('content')
</section>
<script src="{{ asset('plugins/jquery-1.10.2.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('plugins/pace/pace.js') }}"></script>
<script src="{{ asset('scripts/siminta.js') }}"></script>
<script src="{{ asset('plugins/morris/raphael-2.1.0.min.js') }}"></script>
<script src="{{ asset('plugins/morris/morris.js') }}"></script>
<script src="{{ asset('scripts/dashboard-demo.js') }}"></script>

<script src="{{ asset('js/dropzone.js') }}"></script>

</body>

</html>