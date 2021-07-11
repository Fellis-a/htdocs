@section('searcher')

<form class="form-inline mt-2 mt-md-4" method="get" action="search" name="form1">
            <input class="who form-control mr-sm-2" type="text" name="referal" placeholder="Живой поиск" autocomplete="off" aria-label="Search">
            <ul class="search_result"></ul>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Search" name="submitSearch">Поиск</button>
          </form>
