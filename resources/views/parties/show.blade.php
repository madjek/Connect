@extends('layouts.layout')

@section('content')

  <div class="row">
    <div class="col-12">
      <div class="card">

        <div class="card-body">
        
            <div class="row">

                <div class="col">
                  <div class="card-header d-flex justify-content-center position-relative">
                    <h2>Chat in: {{ $party->name }}</h2>
                    <div class="d-flex position-absolute top-50 end-0 translate-middle-y">
                      <a href="{{ route('party.edit', ['id'=>$party->id]) }}" class="btn btn-outline-warning">Edit</a>
                      <form action="{{ route('party.destroy', ['id'=>$party->id]) }}" method="post" onsubmit="if (confirm('Are you sure to delete the party')) {return true} else {return false}">
                      @csrf
                      @method('DELETE')
                      <input type="submit" class="btn btn-outline-danger" value="Delete"></a>
                      </form>
                    </div>
                  </div>
                    <div class="container chat row overflow-auto d-flex align-items-end" id='chat'>

                        <div class="row d-flex flex-wrap">
                            @foreach($party->messages as $message)
                            <div class="row rooms">
                              @foreach(Session::get('id') as $id_u)
                                @if($message->user_id == $id_u->id )
                                <div class="message position-relative" style="background-color: rgba(0, 0, 100, 0.2)">
                                  <form action="{{ route('message.destroy', ['id'=>$message->id]) }}" method="post" onsubmit="if (confirm('Are you sure to delete the message')) {return true} else {return false}">
                                  @csrf
                                  @method('DELETE')
                                    <input type="submit" class="btn btn-outline-danger del position-absolute top-50 end-0 translate-middle-y" value="X">
                                  </form>
                                @else
                                <div class="message">
                                @endif
                              @endforeach
                                <div class="row justify-content-center align-items-center">
                                  <div class="col-2">{{ $message->users->username }}</div>
                                  <div class="col-2">{{ $message->created_at }}</div>
                                  <div class="col-8 msg"><i>{{ $message->content }}</i></div>
                                </div>
                              </div>
                            </div>
                            @endforeach
                            <script>
                              const chat = document.querySelector('#chat');
                              chat.scrollTop = chat.scrollHeight - chat.clientHeight;
                            </script>
                        </div>  

                    </div>    
                      @foreach(Session::get('id') as $id_u)
                        <form class="row message-input" action="{{ route('message.store') }}" method="post">
                        @csrf
                          <input class="card chat-input col-10" name="content" type="text" placeholder="write your message..." maxlength="190">
                          <input class="d-none" name="user_id" type="number"  value="{{ $id_u->id }}">
                          <input class="d-none" name="party_id" type="number" value="{{ $party->id }}">
                          <button class="btn btn-outline-success col-2" type="submit">Send</button>
                        </form>
                      @endforeach
                </div>    
            </div>
        
        </div>
      </div>
    </div>
  </div>

@endsection