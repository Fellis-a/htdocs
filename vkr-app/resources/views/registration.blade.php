<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>Регистрация</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="app.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <div class="row justify-content-md-center mt-5">
    <form class="form-registration" method="post" action="{{route('registr-form')}}">
    @csrf
      <h1 class="h3 mb-3 font-weight-normal">Регистрация</h1>
        <p class="mt-1 mb-3 text-muted">только для преподавателей/руководителей</p>
      <label for="inputEmailReg" class="sr-only mt-5">Эл.почта</label>
      <input type="email" name="email" id="inputEmailReg" class="form-control" placeholder="example@mail.ru" required autofocus>
      <label for="inputPasswordReg" class="sr-only">ФИО</label>
      <input type="text" name="password" id="inputFio" class="form-control" placeholder="Иванов Иван Иванович" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" name="personal" value="personal-data" required > Согласие на обработку персональных данных
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submitReg">Отправить</button>
      <div class="bd-example">
          <p class="mt-1 mb-3 text-muted">Подтверждение придет вам на почту </br>в течении суток</p>
        <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
      </div>

    </form>
    </div>
    </body>
</html>
