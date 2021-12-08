@extends('layouts.layout')

@section('content')

<div class="card profile text-center">
    <div class="card-header"><h1>Profile</h1></div>
    <div class="card-body d-flex">
        <div class="col-3">
            <div class="card">
                <div class=""> <img class="avatar" src="{{ $user->avatar }}" alt="avatar"></div>
                <div class=""><h2>{{ $user->username }}</h2></div>
            </div>
        </div>
        <div class="col-9 card">
            <div class="card">
            <div class="card-header"><h2>Parties:</h2></div>
            
                <div class="card-body">
                    <div class="col-3">
                        <div class="d-flex justify-content-center align-items-end"><h3>{{$user->username }}</h3></div>
                    </div>
              </div>
            </div>
        </div>
    </div>

</div>


@endsection