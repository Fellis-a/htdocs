<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>Вход</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="app.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="row justify-content-md-center mt-5">
@if($errors->$any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->$all as $error)
    <li>{{$error}}</li>

    @endforeach
  </ul>

</div>
@endif

      <form class="form-signin" method="post" action="{{route('auth-form')}}">
  @csrf

        <h1 class="h3 mb-3 font-weight-normal">Вход в личный кабинет</h1>
          <p class="mt-1 mb-3 text-muted">только для преподавателей/руководителей</p>
        <label for="inputEmail" class="sr-only mt-5">Логин/Эл.почта</label>
        <input type="email" id="inputEmail" name="emailAuth" class="form-control" placeholder="example@mail.ru" required autofocus>
        <label for="inputPassword" class="sr-only">Пароль</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="********" required>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Запомнить
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submitAuth">Вход</button>
        <div class="bd-example">



        <a href="{{route('registration')}}" class="mt-5" >Не зарегистрированы? <br />Нажмите сюда,чтобы оставить заявку</a>
          <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
        </div>

      </form>
  </div>
    </body>
</html>
