<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LP</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href={{URL::asset('css/main.css')}} />
        <script src="https://use.fontawesome.com/0be01c127d.js"></script>
    </head>
    <body>
      @include('header')
      @yield('content1')
    </body>
  </html>
