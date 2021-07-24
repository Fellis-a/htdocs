

@section('homeHeader')
<title>Главная</title>
@endsection

@section('homeTitle')
<h2>Список ВКР</h2>
@endsection

@section('homeContent')
@foreach($vkrs as $vkr)
<tr>
  <td>{{$vkr->id_vkr}}</td>
  <td>{{$vkr->title}}</td>
  <td>{{$vkr->specialty['code']}}</td>
  <td>{{$vkr->year}}</td>
  <td><a href="{{$vkr->users['link']}}">{{$vkr->users['name']}}</a></td>
  <td>{{$vkr->tech}}</td>
</tr>
@endforeach
@endsection
