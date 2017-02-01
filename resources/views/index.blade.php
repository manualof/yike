<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" type="text/css" href="{{ vendor('material-design-icons/material-icons.css') }}">
        <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div id="app">
            <router-view></router-view>
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
