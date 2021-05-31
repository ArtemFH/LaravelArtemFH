@extends('layouts.base')
@section('head')
    @parent
    <title>{{ $title }}</title>
    {{--  Username profile user  --}}
@endsection
@section('body')
    @auth
        {{--                {{ dd($hardware) }}--}}
        @if($hardware)
            <ul class="p-3 w-50 list-group mx-auto">
                <li class="list-group-item">CPU: {{ $hardware->CPU }}</li>
                <li class="list-group-item">GPU: {{ $hardware->GPU }}</li>
                <li class="list-group-item">RAM: {{ $hardware->RAM }}</li>
                <li class="list-group-item">PSU: {{ $hardware->PSU }}</li>
                <li class="list-group-item">Storage: {{ $hardware->storage }}</li>
                <li class="list-group-item">Motherboard: {{ $hardware->motherboard }}</li>
            </ul>
        @else
            <ul class="p-3 w-50 list-group mx-auto">
                <li class="list-group-item">The user did not leave a request or is not authentic</li>
            </ul>
        @endif
        <div class="container">
            {{--            <div class="row pb-4">--}}
            @if($indexUserGet->approved == 0)
                <div class="col">
                    <div class="list-group mt-3">
                        <a href="{{ route('results.CPU') }}" class="headNomination list-group-item list-group-item-action flex-column align-items-start">
                            <p class="mb-1">Nomination: CPU</p>
                        </a>
                        @foreach($results as $result)
                            @if($result->nomination_id == 10)
                                <a href="{{ url('benchmarks/'.$result->id) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <p class="mb-1">Score: {{ $result->score }}</p>
                                    <div>
                                        <small class="sm">Enthusiast:
                                            <sm>{{ $result->user->username }}</sm>
                                        </small>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col">
                    <div class="list-group mt-3">
                        <a href="{{ route('results.CPU') }}" class="headNomination list-group-item list-group-item-action flex-column align-items-start">
                            <p class="mb-1">Nomination: GPU</p>
                        </a>
                        @foreach($results as $result)
                            @if($result->nomination_id == 20)
                                <a href="{{ url('benchmarks/'.$result->id) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <p class="mb-1">Score: {{ $result->score }}</p>
                                    <div>
                                        <small class="sm">Enthusiast:
                                            <sm>{{ $result->user->username }}</sm>
                                        </small>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col">
                    <div class="list-group mt-3 pb-2">
                        <a href="{{ route('results.CPU') }}" class="headNomination list-group-item list-group-item-action flex-column align-items-start">
                            <p class="mb-1">Nomination: RAM</p>
                        </a>
                        @foreach($results as $result)
                            @if($result->nomination_id == 30)
                                <a href="{{ url('benchmarks/'.$result->id) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <p class="mb-1">Score: {{ $result->score }}</p>
                                    <div>
                                        <small class="sm">Enthusiast:
                                            <sm>{{ $result->user->username }}</sm>
                                        </small>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif
            {{--            </div>--}}
        </div>
    @endauth
    @guest()
        <div>
            <p>Viewing is available only to authorized users
                <br>
            </p>
        </div>
    @endguest
@endsection
