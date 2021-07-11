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

              @foreach($vkrs as $vkr)
              <tr>
                <td>{{$vkr->id_vkr}}</td>
                <td>{{$vkr->title}}</td>
                <td>{{$vkr->id_spec}}</td>
                <td>{{$vkr->year}}</td>
                <td><a href="#">{{$vkr->id_teach}}</a></td>
                <td>{{$vkr->tech}}</td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>

  </div>
</div>
