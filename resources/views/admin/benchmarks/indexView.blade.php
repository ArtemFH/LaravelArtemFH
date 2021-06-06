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
            {{--                <div class="col-6">--}}
            {{--                    @if($user->role->name == 'user')--}}
            {{--                        <button type="button" class="btn btn-success"--}}
            {{--                                onclick="window.location='{{ route("admin.update_moderator", ['id' => $user->id]) }}'">--}}
            {{--                            Make a moderator--}}
            {{--                        </button>--}}
            {{--                    @endif--}}
            {{--                    @if($user->role->name == 'moderator')--}}
            {{--                        <button type="button" class="btn btn-success"--}}
            {{--                                onclick="window.location='{{ route("admin.update_user", ['id' => $user->id]) }}'">--}}
            {{--                            Make a user--}}
            {{--                        </button>--}}
            {{--                    @endif--}}
            {{--                </div>--}}
        </div>
    </div>
@endsection
