@extends('layouts.layout')

@section('content')

    <form action="{{ route('game.update', ['id'=>$game->id]) }}" method="post">
    @csrf
    @method('PATCH')
    <h2>Edit game</h2>
    <div class="form-group">
        <input class="form-control" name="title" type="text" value="{{  $game->title }}" required>
    </div>
    <div class="form-group">
        <input class="form-control" name="poster" type="text" value="{{  $game->poster }}" required>
    </div>
    <div class="form-group">
        <input class="form-control" name="url" type="text" value="{{  $game->url }}" required>
    </div>
        <input type="submit" value="Edit Game" class="btn btn-outline-success">
    </form>

@endsection