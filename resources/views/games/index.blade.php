@extends('layouts.layout')

@section('content')

  @if(isset($_GET['search']))
    @if(count($games)>0)
      <h3>Search results for "<?=$_GET['search']?>"</h3>
    @else
      <h2>Nothing found</h2>
      <a href="{{ route('game.index') }}">Show all games</a>
    @endif
  @endif

  <div class="row">
    @foreach($games as $game)
    <div class="col-3">
      <div class="card">
        <!-- <div class="card-header text-center"><h5>{{ $game->title }}</h5></div> -->
        <div class="card-body">
          <div class="card-img d-flex justify-content-center align-items-end" style="background-image: url({{ $game->poster }})"><h3>{{$game->title }}</h5></div>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  @if(!isset($_GET['search']))
    {{ $games->links() }}
  @endif

@endsection
