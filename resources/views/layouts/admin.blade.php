<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LP</title>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
        <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <script src="{{URL::asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href={{URL::asset('css/main.css')}} />
        <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
        <script src="https://use.fontawesome.com/0be01c127d.js"></script>
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
        <script src="{{URL::asset('js/aj.js')}}" type="text/javascript"></script>
        <script type="text/javascript">
        $(function(){
          $(".dropdown").hover(
          function() {
              $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
              $(this).toggleClass('open');
              $('b', this).toggleClass("caret caret-up");
          },
          function() {
              $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
              $(this).toggleClass('open');
              $('b', this).toggleClass("caret caret-up");
          });
  });
          </script>
    </head>
    <body>
      @include('header')
      @yield('content1')
    </body>
  </html>
