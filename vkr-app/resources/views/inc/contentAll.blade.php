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
                <tr>

                  <td>1</td>
                  <td>Экспертная система для оценки пользовательского интерфейса</td>
                  <td>АСУб</td>
                  <td>2020</td>
                  <td><a href="#">Серышева Ирина Анатольевна</a></td>
                  <td>libero</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Разработка системы поддержки обращений граждан в ОПФР по Иркутской области</td>
                  <td>ЭВМб</td>
                  <td>2019</td>
                  <td><a href="#">Аршинский Вадим Леонидович</a></td>
                    <td>Asterisk 1.1, CMU Sphinx, CMU CLMTK, Python</td>
                </tr>
                <tr>

                  <td>3</td>
                  <td>Разработка информационной системы диспетчеризации крупногабаритного груза</td>
                  <td>ИСТбп</td>
                  <td>2020</td>
                  <td><a href="#">Серышева Ирина Анатольевна</a></td>
                  <td>Java EE, Spring, PostgreSQL,OpenStreetMAP</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Применение методов прогнозной аналитики в LMS moodle</td>
                  <td>ЭВМб</td>
                  <td>2019</td>
                  <td><a href="#">Бучнев Олег Сергеевич</a></td>
                  <td>Moodle</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Разработка принципов построения базы данных горно-геологического назначения</td>
                  <td>АСУб</td>
                  <td>2018</td>
                  <td><a href="#">Серышева Ирина Анатольевна</a></td>
                  <td>Android, Micromine</td>
                </tr>

                <tr>
                  <td>6</td>
                  <td>Прогнозирование увольнений работников организации на основе информации в корпоративной системе</td>
                  <td>ИСМб</td>
                  <td>2019</td>
                  <td><a href="#">Бучнев Олег Сергеевич</a></td>
                  <td>CatBoost, React, Redux, webpack, Java, Spring, Python, PostgreSQ</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Разработка информационной платформы сетевого анализа социальных взаимосвязей в предварительном следствии</td>
                  <td>ИСМб</td>
                  <td>2020</td>
                  <td><a href="#">Серышева Ирина Анатольевна</a></td>
                  <td>Python, NetworkX, XML</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Технологии и средства 3D визуализации в исследованиях энергетики</td>
                  <td>ИСТбп</td>
                  <td>2020</td>
                  <td><a href="#">Григорьев Станислав Валентинович</a></td>
                  <td></td>
                </tr>

              </tbody>
            </table>
          </div>

    </div>
  </div>
</div>
