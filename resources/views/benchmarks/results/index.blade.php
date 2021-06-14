@extends('layouts.base')
@section('head')
    @parent
    <title>Result: {{ $title }}</title>
@endsection
@section('body')
    <div class="container pb-4 info-view">
        <div class="row card info-view-block">
            <div style="display: flex">
                <div class="">
                    <div class="card-body">
                        <p class="mb-1">Score: {{ $indexResultGet->score }}</p>
                        <p class="card-text">Create result: {{ $indexResultGet->created_at }}</p>
                        <button type="button" class="buttonSuccess btn btn-success" onclick="window.location='{{ route("user.profileView", ['indexUser' => $indexResultGet->user->username]) }}'">{{ $indexResultGet->user->username }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-image">
        <img src="{{ $indexResultGet->image }}" alt="post-image" id="image-result" class="result-image card-image">
    </div>
@endsection
