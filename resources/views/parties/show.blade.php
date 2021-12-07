@extends('layouts.layout')

@section('content')

  <div class="row">
    <div class="col-12">
      <div class="card">

        <div class="card-body">
        
            <div class="row">

                <div class="col">
                    <div class="card-header text-center"><h5>Chat in: {{ $party->name }}</h5></div>
                    <div class="card chat d-flex justify-content-end">

                      <div class="row">
                        <div class="row d-flex flex-wrap">
                            @foreach($party->messages as $message)
                            <div class="row rooms">
                                  <div class="">
                                    <div class="row  justify-content-center align-items-center">
                                      <div class="col-1">{{ $message->user_id }}</div>
                                      <div class="col-2">{{ $message->created_at }}</div>
                                      <div class="col-9"><p>{{ $message->content }}</h4></div>
                                    </div>
                                  </div>
                            </div>
                            @endforeach
                        </div>  
                      </div>

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