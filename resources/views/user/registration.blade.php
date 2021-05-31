@extends('layouts.base')
@section('head')
    @parent
    <title>{{ $title }}</title>
@endsection
@section('body')
    <form class="col-3" method="POST" action="{{ route('user.registration') }}">
        @csrf
        <div class="form-group">
            <label for="username" class="col-form-label-lg">Username</label>
            <input id="username" class="form-control" name="username" autocomplete="off" type="username" value="" placeholder="Username">
            @error('username')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email" class="col-form-label-lg">Email</label>
            <input id="email" class="form-control" name="email" type="text" value="" placeholder="Email">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="password" class="col-form-label-lg">Password</label>
            <input id="password" class="form-control" name="password" type="password" value="" placeholder="Password">
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="confirm_password" class="col-form-label-lg">Repeat password</label>
            <input id="confirm_password" class="form-control" name="confirm_password" type="password" value="" placeholder="Repeat password">
        </div>
        <div class="form-group">
            <fieldset>
                <label for="awards_id" class="col-form-label-lg">awards_id</label>
                <input id="awards_id" class="form-control" name="awards_id[]" type="checkbox" value="1" placeholder="awards_id">
                <input id="awards_id" class="form-control" name="awards_id[]" type="checkbox" value="2" placeholder="awards_id">
                <input id="awards_id" class="form-control" name="awards_id[]" type="checkbox" value="3" placeholder="awards_id">
            </fieldset>
        </div>
        <div class="form-group center">
            <button class="buttonSuccess btn btn-lg btn-primary" type="submit" name="send" value="1">Registration</button>
        </div>
    </form>
@endsection
