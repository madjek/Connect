@extends('layouts.layout')

@section('content')

<form action="" method="post">
    @csrf
    <h2>Register</h2>
    <div class="form-group">
        <input class="form-control" name="username" type="text" placeholder="Username" text="{{ $user->username }}" required>
    </div>
    <div class="form-group">
        <input class="form-control" name="steamUsername" type="text" placeholder="Steam Username" required>
    </div>
    <div class="form-group">
        <input class="form-control" name="email" type="email" placeholder="Email" required>
    </div>
        <div class="form-group">
            <input class="form-control" name="avatar" type="text" placeholder="Avatar link" required>
        </div>
        <input type="submit" value="Edit" class="btn btn-outline-success">
    </form>


@endsection