<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div id="app" class="wrapper">
        
        <router-view name="header"></router-view>
        <router-view name="sidebar"></router-view>
        @yield('content')
        <router-view name="footer"></router-view>
    </div>

    <!-- Scripts -->
</body>
</html>
