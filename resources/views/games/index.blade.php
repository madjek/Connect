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
      @guest
    <a href="{{ route('auth.login') }}">
      @else
    <a href="{{ route('game.show', ['id'=>$game->id]) }}">
      @endguest
      <div class="card">
        <div class="card-body">
          <div class="card-img d-flex justify-content-center align-items-end" style="background-image: url({{ $game->poster }})"><h3>{{$game->title }}</h3></div>

        </div>
      </div>
    </a> 
    </div>
    @endforeach
  </div>

  @if(!isset($_GET['search']))
    {{ $games->links() }}
  @endif

@endsection
