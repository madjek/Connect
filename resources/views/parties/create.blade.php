@extends('layouts.layout')

@section('content')

    <form action="{{ route('party.store') }}" method="post">
    @csrf
    <h2>Add new party</h2>
    <div class="form-group">
        <input class="form-control" name="name" type="text" placeholder="Party name" required>
    </div>
    <div class="form-group">
        <input class="form-control" name="icon" type="text" placeholder="Icon link" required>
    </div>
        <input type="submit" value="Add new party" class="btn btn-outline-success">
    </form>

@endsection