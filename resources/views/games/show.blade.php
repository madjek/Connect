@extends('layouts.layout')

@section('content')



  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header text-center">
          <div class="card-btn d-flex justify-content-center ">
            <a href="{{ route('game.edit', ['id'=>$game->id]) }}" class="btn btn-outline-warning">Edit</a>
            <form action="{{ route('game.destroy', ['id'=>$game->id]) }}" method="post" onsubmit="if (confirm('Are you sure to delete the game')) {return true} else {return false}">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-outline-danger" value="Delete"></a>
            </form>
            <h5>{{ $game->title }} rooms:</h5>
            <a href="{{ route('party.create') }}" class="btn btn-outline-success">New party</a>
          </div>
          </div>
        <div class="card-body">
        
            <div class="row">
                <div class="row d-flex flex-wrap">
                    @foreach($game->parties as $party)
                    <div class="col-4 rooms">
                          <div class="card">
                          <a href="{{ route('party.show', ['id'=>$party->id]) }}">
                            <div class="row d-flex justify-content-center align-items-center">
                              <div class="col-2 party-icon" style="background-image: url({{ $party->icon }})"></div>
                              <div class="col-10"><h4>{{ $party->name }}</h4></div>
                            </div>
                          </a>
                          </div>
                    </div>
                    @endforeach
                </div>  
            </div>
        
        </div>
      </div>
    </div>
  </div>

@endsection