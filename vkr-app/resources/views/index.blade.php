
<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    @yield('teacherHeader')
    @yield('homeHeader')

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>{{ config('app.name', 'Архив ВКР | ИИТиАД Ирниту') }}</title>

   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="js/search.js"></script>

   <!-- Fonts -->
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
  @include('layouts.app')


  @if(Request::is('/'))
    @include('inc.contentAll')
  @endif
  @if(Request::is('/teacher'))
    @include('inc.contentTeacher')
  @endif

</div>
  @include('inc.footer')
</body>
</html>
