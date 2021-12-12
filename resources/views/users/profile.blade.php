@extends('layouts.layout')

@section('content')

<div class="card profile text-center">
    <div class="card-header"><h1>Profile</h1></div>
    <div class="card-body d-flex">
        <div class="col-2">
            <div class="card">
                <div class=""> <img class="avatar" src="{{ $user->avatar }}" alt="avatar"></div>
                <div class=""><h2>{{ $user->username }}</h2></div>
            </div>
        </div>
        <div class="col-7 card">
            <div class="card">
            <div class="card-header"><h2>Parties:</h2></div>
                <div class="card-body row d-flex parties overflow-auto">
                @foreach($user->messages->unique('party_id') as $message)
                <div class="card col-6">
                    <a href="{{ route('party.show', ['id'=>$message->party_id]) }}">
                        <div><h3>{{ $message->parties->name }}</h3></div>
                    </a>
                </div>
                @endforeach
              </div>
            </div>
        </div>
        <div class="col-3 card">
            <div class="card">
            <div class="card-header"><h2>Friends:</h2></div>
                <div class="card-body row d-flex parties overflow-auto">
                @foreach($user->relations as $friend)
                    <div class="card">
                        <div><h4>{{$friend->users->username }}</h4></div>
                    </div>
                @endforeach
              </div>
            </div>
        </div>
    </div>

</div>


@endsection