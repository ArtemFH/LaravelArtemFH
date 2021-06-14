@extends('layouts.base')
@section('head')
    @parent
    <title>{{ $title }}: {{$getHardware->id}}</title>
@endsection
@section('body')
    <div class="hardwareAj">
        <div class="hardware-detail-info">
            <div class="hardware-detail-block">
                <img alt="" src="{{url('svg/cpu.svg')}}">
                <div class="info-hardware-high">{{ $getHardware->CPU }}</div>
                <span class="info-hardware-low">CPU</span>
            </div>
            <div class="hardware-detail-block">
                <img alt="" src="{{url('svg/motherboard.svg')}}">
                <div class="info-hardware-high">{{ $getHardware->motherboard }}</div>
                <span class="info-hardware-low">MotherBoard</span>
            </div>
            <div class="hardware-detail-block">
                <img alt="" src="{{url('svg/gpu.svg')}}">
                <div class="info-hardware-high">{{ $getHardware->GPU }}</div>
                <span class="info-hardware-low">GPU</span>
            </div>
            <div class="hardware-detail-block">
                <img alt="" src="{{url('svg/ram.svg')}}">
                <div class="info-hardware-high">{{ $getHardware->RAM }}</div>
                <span class="info-hardware-low">RAM</span>
            </div>
            <div class="hardware-detail-block">
                <img alt="" src="{{url('svg/psu.svg')}}">
                <div class="info-hardware-high">{{ $getHardware->PSU }}</div>
                <span class="info-hardware-low">PSU</span>
            </div>
            <div class="hardware-detail-block">
                <img alt="" src="{{url('svg/storage.svg')}}">
                <div class="info-hardware-high">{{ $getHardware->storage }}</div>
                <span class="info-hardware-low">Storage</span>
            </div>
        </div>
    </div>
    <div class="buttonsAj">
        @can('admin')
            <button type="button" class="buttonUnder buttonAj btn btn-success" onclick="window.location='{{ route("admin.approved_result_hardware", ['id' => $getHardware->id]) }}'">Approved Result {{$getHardware->id}}</button>
            <button type="button" class="buttonUnder buttonAj btn btn-success" onclick="window.location='{{ route("admin.reject_result_hardware", ['id' => $getHardware->id]) }}'">Reject Result {{$getHardware->id}}</button>
        @endcan
        @can('moderator')
            <button type="button" class="buttonUnder buttonAj btn btn-success" onclick="window.location='{{ route("moderator.approved_result_hardware", ['id' => $getHardware->id]) }}'">Approved Result {{$getHardware->id}}</button>
            <button type="button" class="buttonUnder buttonAj btn btn-success" onclick="window.location='{{ route("moderator.reject_result_hardware", ['id' => $getHardware->id]) }}'">Reject Result {{$getHardware->id}}</button>
        @endcan
    </div>
@endsection
