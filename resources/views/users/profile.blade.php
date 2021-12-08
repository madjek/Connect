@extends('layouts.layout')

@section('content')

<div class="card row profile d-flex justify-content-center align-items-center">
        <div class="col-4">
            <div class="row"> <img class="avatar" src="{{ $user->avatar }}" alt="avatar"></div>
        </div>
        <div class="col-8">
            <div class="row"><h2>User Name: {{ $user->username }}</h2></div>
            <div class="row"><h2>In Steam: {{ $user->steamUsername }}</h2></div>
        </div>
</div>


@endsection