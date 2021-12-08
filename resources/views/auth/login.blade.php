@extends('layouts.layout')

@section('content')

    <form action="{{ route('auth.login') }}" method="post">
    @csrf
    <h2>Login</h2>
        <div class="form-group">
            <input class="form-control" name="email" type="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input class="form-control" name="password" type="password" placeholder="Password" required>
        </div>
        <input type="submit" value="Login" class="btn btn-outline-success">
    </form>

@endsection