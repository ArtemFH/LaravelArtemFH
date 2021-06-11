@extends('layouts.base')
@section('head')
    @parent
    <title>{{ $title }}</title>
@endsection
@section('body')
    <div class="container mt-4">
        <div class="container row b">
            <div class="col-6">
                <div class="card mb-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $getBenchmark->score }}</li>
                        <li class="list-group-item">{{ $getBenchmark->user->username }}</li>
                        <li class="list-group-item">{{ $getBenchmark->nomination->name }}</li>
                        <li class="list-group-item">{{ $getBenchmark->approved }}</li>
                        <img style="width: 100%" src="{{ $getBenchmark->image }}" alt="post-image" class="card-image">
                    </ul>
                </div>
            </div>
            @can('admin')
                <button type="button" class="btn btn-success" onclick="window.location='{{ route("admin.approved_result_benchmark", ['id' => $getBenchmark->id]) }}'">Approved Result{{$getBenchmark->id}}</button>
                <button type="button" class="btn btn-danger" onclick="window.location='{{ route("admin.reject_result_benchmark", ['id' => $getBenchmark->id]) }}'">Reject Result{{$getBenchmark->id}}</button>
            @endcan
            @can('moderator')
                <button type="button" class="btn btn-success" onclick="window.location='{{ route("moderator.approved_result_benchmark", ['id' => $getBenchmark->id]) }}'">Approved Result{{$getBenchmark->id}}</button>
                <button type="button" class="btn btn-danger" onclick="window.location='{{ route("moderator.reject_result_benchmark", ['id' => $getBenchmark->id]) }}'">Reject Result{{$getBenchmark->id}}</button>
            @endcan
        </div>
    </div>
@endsection
