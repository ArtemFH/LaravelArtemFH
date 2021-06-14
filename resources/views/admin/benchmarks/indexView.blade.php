@extends('layouts.base')
@section('head')
    @parent
    <title>{{ $title }}: {{$getBenchmark->id}}</title>
@endsection
@section('body')
    <div class="hardwareAj">
        <div class="hardware-detail-info">
            <div class="hardware-detail-block">
                <img alt="" src="{{url('svg/cpu.svg')}}">
                <div class="info-hardware-high">{{ $getBenchmark->user->hardware->first()->CPU }}</div>
                <span class="info-hardware-low">CPU</span>
            </div>
            <div class="hardware-detail-block">
                <img alt="" src="{{url('svg/motherboard.svg')}}">
                <div class="info-hardware-high">{{ $getBenchmark->user->hardware->first()->motherboard }}</div>
                <span class="info-hardware-low">MotherBoard</span>
            </div>
            <div class="hardware-detail-block">
                <img alt="" src="{{url('svg/gpu.svg')}}">
                <div class="info-hardware-high">{{ $getBenchmark->user->hardware->first()->GPU }}</div>
                <span class="info-hardware-low">GPU</span>
            </div>
            <div class="hardware-detail-block">
                <img alt="" src="{{url('svg/ram.svg')}}">
                <div class="info-hardware-high">{{ $getBenchmark->user->hardware->first()->RAM }}</div>
                <span class="info-hardware-low">RAM</span>
            </div>
            <div class="hardware-detail-block">
                <img alt="" src="{{url('svg/psu.svg')}}">
                <div class="info-hardware-high">{{ $getBenchmark->user->hardware->first()->PSU }}</div>
                <span class="info-hardware-low">PSU</span>
            </div>
            <div class="hardware-detail-block">
                <img alt="" src="{{url('svg/storage.svg')}}">
                <div class="info-hardware-high">{{ $getBenchmark->user->hardware->first()->storage }}</div>
                <span class="info-hardware-low">Storage</span>
            </div>
        </div>
    </div>
    <div class="hardwareAj">
        <div class="hardware-detail-info">
            <div class="hardware-detail-block">
                <img alt="" src="{{url('svg/score.svg')}}">
                <div class="info-hardware-high">{{ $getBenchmark->score }}</div>
                <span class="info-hardware-low">Score</span>
            </div>
            <div class="hardware-detail-block">
                <img alt="" src="{{url('svg/users.svg')}}">
                <div class="info-hardware-high">{{ $getBenchmark->user->username }}</div>
                <span class="info-hardware-low">Enthusiast</span>
            </div>
            <div class="hardware-detail-block">
                @if($getBenchmark->nomination->name == 'CPU')
                    <img alt="" src="{{url('svg/cpu.svg')}}">
                @elseif($getBenchmark->nomination->name == 'GPU')
                    <img alt="" src="{{url('svg/gpu.svg')}}">
                @elseif($getBenchmark->nomination->name == 'RAM')
                    <img alt="" src="{{url('svg/ram.svg')}}">
                @endif
                <div class="info-hardware-high">{{ $getBenchmark->nomination->name }}</div>
                <span class="info-hardware-low">Nomination</span>
            </div>
        </div>
    </div>
    <div class="card-image">
        <img src="{{ $getBenchmark->image }}" alt="post-image" id="image-result" class="result-image card-image">
    </div>
    <div class="buttonsAj">
        @can('admin')
            <button type="button" class="buttonUnder buttonAj btn btn-success" onclick="window.location='{{ route("admin.approved_result_benchmark", ['id' => $getBenchmark->id]) }}'">Approved Result {{$getBenchmark->id}}</button>
            <button type="button" class="buttonUnder buttonAj btn btn-success" onclick="window.location='{{ route("admin.reject_result_benchmark", ['id' => $getBenchmark->id]) }}'">Reject Result {{$getBenchmark->id}}</button>
        @endcan
        @can('moderator')
            <button type="button" class="buttonUnder buttonAj btn btn-success" onclick="window.location='{{ route("moderator.approved_result_benchmark", ['id' => $getBenchmark->id]) }}'">Approved Result {{$getBenchmark->id}}</button>
            <button type="button" class="buttonUnder buttonAj btn btn-success" onclick="window.location='{{ route("moderator.reject_result_benchmark", ['id' => $getBenchmark->id]) }}'">Reject Result {{$getBenchmark->id}}</button>
        @endcan
    </div>
@endsection
