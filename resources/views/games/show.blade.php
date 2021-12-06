@extends('layouts.layout')

@section('content')

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header text-center"><h5>{{ $game->title }}</h5></div>
        <div class="card-body">
        
            <div class="row">
                <div class="col-3">
                    @foreach($game->parties as $party)
                    <div class="row rooms">
                          <div class="card">
                            <div class="row d-flex justify-content-center align-items-center">
                              <div class="col-2 party-icon" style="background-image: url({{ $party->icon }})"></div>
                              <div class="col-10"><h4>{{ $party->name }}</h4></div>
                            </div>
                          </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-9">
                    <div class="card-header text-center"><h5>Chat in ...</h5></div>
                    <div class="card chat">

                    </div>    
                    <div class="row message">
                        <input class="card chat-input col-10" type="text" placeholder="write your message...">
                        <button class="btn btn-outline-success col-2" type="submit">Send</button>
                    </div>
                </div>    
            </div>
        
        </div>
      </div>
    </div>
  </div>

@endsection