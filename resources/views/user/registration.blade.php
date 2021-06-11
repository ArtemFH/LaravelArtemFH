@extends('layouts.base')
@section('head')
    @parent
    <title>{{ $title }}</title>
@endsection
@section('body')
    <form class="col-3" method="POST" enctype="multipart/form-data" action="{{ route('user.registration') }}">
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
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1" class="col-form-label-lg">Like nomination</label>
            <select class="form-control" id="exampleFormControlSelect1" name="like_nomination_id">
                <option value="10" selected>CPU</option>
                <option value="20">GPU</option>
                <option value="30">RAM</option>
            </select>
        </div>
        <div class="form-group" style="display: grid">
            <label for="c-file" class="col-form-label-lg">Avatar</label>
            <div id="c-file" class="custom-file">
                <input type="file" name="avatar" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Example avatar input</label>
            </div>
        </div>
        <div class="form-group center">
            <button class="buttonSuccess btn btn-lg btn-primary" type="submit" name="send" value="1">Registration</button>
        </div>
    </form>
@endsection
