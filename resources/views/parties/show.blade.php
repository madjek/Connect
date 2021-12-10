@extends('layouts.layout')

@section('content')

  <div class="row">
    <div class="col-12">
      <div class="card">

        <div class="card-body">
        
            <div class="row">

                <div class="col">
                    <div class="card-header text-center">
                    <div class="card-btn d-flex justify-content-center ">
                      <a href="{{ route('party.edit', ['id'=>$party->id]) }}" class="btn btn-outline-warning">Edit</a>
                      <form action="{{ route('party.destroy', ['id'=>$party->id]) }}" method="post" onsubmit="if (confirm('Are you sure to delete the party')) {return true} else {return false}">
                      @csrf
                      @method('DELETE')
                      <input type="submit" class="btn btn-outline-danger" value="Delete"></a>
                      </form>
                      <h5>Chat in: {{ $party->name }}</h5>
                    </div>
                    <div class="container chat overflow-auto d-flex justify-content-end">

                        <div class="row d-flex flex-wrap">
                            @foreach($party->messages as $message)
                            <div class="row rooms">
                              @foreach(Session::get('id') as $id_u)
                              @if($message->user_id == $id_u->id )
                              <div class="message" style="background-color: rgba(0, 0, 100, 0.2)">
                              @else
                              <div class="message">
                              @endif
                              @endforeach
                                <div class="row justify-content-center align-items-center">
                                  <div class="col-2">{{ $message->users->username }}</div>
                                  <div class="col-2">{{ $message->created_at }}</div>
                                  <div class="col-8"><i>{{ $message->content }}</i></div>
                                </div>
                              </div>
                            </div>
                            @endforeach
                        </div>  

                    </div>    
                    <div class="row message-input">
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