<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>{{ config('app.name', 'Архив ВКР | ИИТиАД Ирниту') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body class="app">

        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ __('Архив ВКР | ИИТиАД Ирниту') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                                @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">{{ Auth::user()->name }}</a>
                                        @else
                                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Войти</a>

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Зарегистрироваться</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif

                        </ul>
                    </div>
                </div>
            </nav>
            <main class="py-4">
                <div class="container mt-5">
                  <div class="row">
                    <div class="col-8">
                      @yield('homeTitle')
                    </div>
                    <div class="col-4">

                    </div>
                  </div>
                  <div class="row">
                    <div class="col-4">
                      @if(Request::is('/'))
                        @include('comp.searcher')
                      @endif
                    </div>
                    <div class="col-8 ">
                      <div class="card-header">
                      <h4>Фильтр по тегам</h4>
                    </div>
                    <div class="card-body border ">
                      <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                      <label class="form-check-label" for="inlineCheckbox1">UI</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                      <label class="form-check-label" for="inlineCheckbox2">БД</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                      <label class="form-check-label" for="inlineCheckbox2">WEB</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                      <label class="form-check-label" for="inlineCheckbox2">Логика</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                      <label class="form-check-label" for="inlineCheckbox2">Экспертные системы</label>
                    </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">ИИ</label>
                      </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                          <label class="form-check-label" for="inlineCheckbox2">ИС</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                          <label class="form-check-label" for="inlineCheckbox2">Базы знаний</label>
                        </div>
                      </div>


                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Другие </button>

                  </div>
                  </div>



                  <div class="row mt-5 mb-5">
                    <div class="col mt-5">
                      <div class="table-responsive">
                            <table class="table table-striped table-sm">
                              <thead>
                                <tr>
                                  <th>№</th>
                                  <th>Название</th>
                                  <th class="dropdown-toggle">Специальность</th>
                                  <th class="dropdown-toggle">Год</th>
                                  <th>Преподаватель</th>
                                  <th>Теги</th>
                                </tr>
                              </thead>
                              <tbody>
                                @if(Request::is('/search'))
                                @section('homesearch')
                                @endif



                                @foreach($vkrs as $vkr)
                                <tr>
                                  <td>{{$vkr->id_vkr}}</td>
                                  <td>{{$vkr->title}}</td>
                                  <td>{{$vkr->specialty->code}}</td>
                                  <td>{{$vkr->year}}</td>
                                  <td>{{$vkr->user['name']}}</td>
                                  <td>{{$vkr->tech}}</td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <div>
                                {{ $vkrs->links() }}
                            </div>
                              <div class="d-flex justify-content-center">
                              <!--<button type="button" name="button"><a href="{{route('vkr-addForm')}}"></a></button>-->
                              </div>
                          </div>

                    </div>
                  </div>

                </div>
            </main>
        </div>


        @include('comp.footer')


    </body>
</html>
