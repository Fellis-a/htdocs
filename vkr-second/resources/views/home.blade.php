@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h5>Мои ВКР: {{ Auth::user()->name }}</h5></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                      <div class="col mt-2 mb-4">

                        <a role="button"  class="btn btn-sm btn-block btn-outline-primary round-3" href="{{ url('/') }}">< На главную</a>
                      </div>
                      <div class="col mt-2"></div>

                      <div class="col mt-2">

                        <a role="button" class="btn btn-sm btn-block btn-primary round-3"class="text-my-own-color"
                          href="{{route('vkr-create')}}">+ Добавить ВКР</a>
                      </div>


                    </div>

                    <div class="table-responsive">
                          <table class="table table-striped table-sm">
                            <thead>
                              <tr>

                                <th>Название</th>
                                <th class="dropdown-toggle">Специальность</th>
                                <th class="dropdown-toggle">Год</th>

                              </tr>
                            </thead>
                            <tbody>

                              @foreach($vkrs as $vkr)
                              <tr>
                                <td>{{$vkr->title}}</td>
                                <td>{{$vkr->specialty->code}}</td>
                                <td>{{$vkr->year}}</td>

                              </tr>
                              @endforeach
                            </tbody>
                          </table>

                            <div class="d-flex justify-content-center">
                            <!--<button type="button" name="button"><a href="{{route('vkr-addForm')}}"></a></button>-->
                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
