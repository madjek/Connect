@extends('layouts.layout')

@section('content')



  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header text-center"><h5>{{ $game->title }} rooms:</h5></div>
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