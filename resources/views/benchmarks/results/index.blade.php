@extends('layouts.base')
@section('head')
    @parent
    <title>{{ $title }}</title>
@endsection
@section('body')

    {{--    {{ dd($indexResultGet) }}--}}
    <div class="container pb-4">
        <div class="row card">
            <div style="display: flex">
                <div class="">
                    <div class="card-body">
                        <p class="mb-1">Score: {{ $indexResultGet->score }}</p>
                        <p class="card-text">Create result: {{ $indexResultGet->created_at }}</p>
                        <a href="/user/{{$indexResultGet->user->username}}" class="btn btn-primary">{{ $indexResultGet->user->username }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-image">
        <img src="{{ $indexResultGet->image }}" alt="post-image" id="image-result" class="result-image card-image">
    </div>
@endsection
