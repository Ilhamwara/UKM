<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>UKM ADMIN</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/paper-dashboard.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/demo.css')}}" rel="stylesheet" />
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/Muli-Font.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{asset('css/themify-icons.css')}}" rel="stylesheet">
    @yield('css')
</head>
<body>
@yield('content')
</body>
    <script src="{{asset('js/jquery-1.10.2.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap-checkbox-radio.js')}}"></script>
    <script src="{{asset('js/bootstrap-notify.js')}}"></script>
    <script src="{{asset('js/paper-dashboard.js')}}"></script>
    <script src="{{asset('js/demo.js')}}"></script>
    @yield('js')
</html>
