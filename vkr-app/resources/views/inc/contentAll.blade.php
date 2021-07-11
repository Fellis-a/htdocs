@section('contantall')

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
        @include('inc.searcher')
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
  @section('pagination')


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
                @section('search')
                @endif

                @yield('homeContent')

              </tbody>
            </table>
          </div>

    </div>
  </div>

</div>
