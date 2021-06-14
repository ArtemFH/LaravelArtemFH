@extends('layouts.base')
@section('head')
    @parent
    <title>{{ $title }}</title>
@endsection
@section('body')
    @auth
        @if($hardware)
            <div class="hardwareAj">
                <div class="hardware-detail-info">
                    <div class="hardware-detail-block">
                        <img alt="" src="{{url('svg/cpu.svg')}}">
                        <div class="info-hardware-high">{{ $hardware->CPU }}</div>
                        <span class="info-hardware-low">CPU</span>
                    </div>
                    <div class="hardware-detail-block">
                        <img alt="" src="{{url('svg/motherboard.svg')}}">
                        <div class="info-hardware-high">{{ $hardware->motherboard }}</div>
                        <span class="info-hardware-low">MotherBoard</span>
                    </div>
                    <div class="hardware-detail-block">
                        <img alt="" src="{{url('svg/gpu.svg')}}">
                        <div class="info-hardware-high">{{ $hardware->GPU }}</div>
                        <span class="info-hardware-low">GPU</span>
                    </div>
                    <div class="hardware-detail-block">
                        <img alt="" src="{{url('svg/ram.svg')}}">
                        <div class="info-hardware-high">{{ $hardware->RAM }}</div>
                        <span class="info-hardware-low">RAM</span>
                    </div>
                    <div class="hardware-detail-block">
                        <img alt="" src="{{url('svg/psu.svg')}}">
                        <div class="info-hardware-high">{{ $hardware->PSU }}</div>
                        <span class="info-hardware-low">PSU</span>
                    </div>
                    <div class="hardware-detail-block">
                        <img alt="" src="{{url('svg/storage.svg')}}">
                        <div class="info-hardware-high">{{ $hardware->storage }}</div>
                        <span class="info-hardware-low">Storage</span>
                    </div>
                </div>
            </div>
        @else
            <ul class="p-3 w-50 list-group mx-auto">
                <li class="list-group-item">The user did not leave a request or is not authentic</li>
            </ul>
        @endif
        @if($indexUserGet->approved == 0)
            <div class="row pb-4 div-contains">
                <div class="col contains">
                    <div class="list-group mt-3">
                        <a href="{{ route('results.CPU') }}" class="headNomination list-group-item list-group-item-action flex-column align-items-start">
                            <p class="mb-1">Nomination: CPU</p>
                        </a>
                        @if($resultsCPU->first())
                            @foreach($resultsCPU as $indexCPU)
                                <a href="{{ url('benchmarks/'.$indexCPU->id) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Place: {{ $loop->iteration }}</h5>
                                    </div>
                                    <p class="mb-1">Score: {{ $indexCPU->score }}</p>
                                </a>
                            @endforeach
                        @else
                            <a class="list-group-item list-group-item-action flex-column align-items-start">
                                <p class="mb-2">None info</p>
                            </a>
                        @endif
                    </div>
                </div>
                <div class="col contains">
                    <div class="list-group mt-3">
                        <a href="{{ route('results.GPU') }}" class="headNomination list-group-item list-group-item-action flex-column align-items-start">
                            <p class="mb-1">Nomination: GPU</p>
                        </a>
                        @if($resultsGPU->first())
                            @foreach($resultsGPU as $indexGPU)
                                <a href="{{ url('benchmarks/'.$indexGPU->id) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Place: {{ $loop->iteration }}</h5>
                                    </div>
                                    <p class="mb-1">Score: {{ $indexGPU->score }}</p>
                                </a>
                            @endforeach
                        @else
                            <a class="list-group-item list-group-item-action flex-column align-items-start">
                                <p class="mb-2">None info</p>
                            </a>
                        @endif
                    </div>
                </div>
                <div class="col contains">
                    <div class="list-group mt-3">
                        <a href="{{ route('results.RAM') }}" class="headNomination list-group-item list-group-item-action flex-column align-items-start">
                            <p class="mb-1">Nomination: RAM</p>
                        </a>
                        @if($resultsRAM->first())
                            @foreach($resultsRAM as $indexRAM)
                                <a href="{{ url('benchmarks/'.$indexRAM->id) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Place: {{ $loop->iteration }}</h5>
                                    </div>
                                    <p class="mb-1">Score: {{ $indexRAM->score }}</p>
                                </a>
                            @endforeach
                        @else
                            <a class="list-group-item list-group-item-action flex-column align-items-start">
                                <p class="mb-2">None info</p>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @endif
    @endauth
    @guest()
        <div>
            <p>Viewing is available only to authorized users
                <br>
            </p>
        </div>
    @endguest
@endsection
