<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style media="screen">
      body {
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      @include('inc.msg')
      @yield('content')
    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
  </body>
</html>
