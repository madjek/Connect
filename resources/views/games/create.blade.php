@extends('layouts.layout')

@section('content')

    <form action="{{ route('game.store') }}" method="post">
    @csrf
    <h2>Add new game</h2>
    <div class="form-group">
        <input class="form-control" name="title" type="text" placeholder="Game title" required>
    </div>
    <div class="form-group">
        <input class="form-control" name="poster" type="text" placeholder="Poster url" required>
    </div>
    <div class="form-group">
        <input class="form-control" name="url" type="text" placeholder="Game url" required>
    </div>
        <input type="submit" value="Add new Game" class="btn btn-outline-success">
    </form>

@endsection