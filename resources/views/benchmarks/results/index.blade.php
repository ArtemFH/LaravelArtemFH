@extends('layouts.base')
@section('head')
    @parent
    <title>{{ $title }}</title>
@endsection
@section('body')

    {{--    {{ dd($indexResultGet) }}--}}
    <div class="container col-8 pb-4">
        <div class="row card">
            <div style="display: flex">
                <div class="col-4">
                    <div class="card-body">
                        <p class="mb-1">Score: {{ $indexResultGet->score }}</p>
                        <p class="card-text">Create result: {{ $indexResultGet->created_at }}</p>
                        <a href="/user/{{$indexResultGet->user->username}}" class="btn btn-primary">{{ $indexResultGet->user->username }}</a>
                    </div>
                </div>
                <div class="col-8 card-image">
                    <img style="width: 100%" src="{{ $indexResultGet->image }}" alt="post-image" class="card-image">
                </div>
            </div>
        </div>
    </div>
@endsection
