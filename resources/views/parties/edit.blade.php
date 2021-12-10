@extends('layouts.layout')

@section('content')

    <form action="{{ route('party.update', ['id'=>$party->id]) }}" method="post">
    @csrf
    @method('PATCH')
    <h2>Edit party</h2>
    <div class="form-group">
        <input class="form-control" name="name" type="text" value="{{  $party->name }}" required>
    </div>
    <div class="form-group">
        <input class="form-control" name="icon" type="text" value="{{  $party->icon }}" required>
    </div>
        <input type="submit" value="Edit party" class="btn btn-outline-success">
    </form>

@endsection