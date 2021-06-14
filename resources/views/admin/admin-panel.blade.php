@extends('layouts.base')
@section('head')
    @parent
    <title>{{ $title }}</title>
@endsection
@section('body')
    <div class="container m-auto">
        <div class="row admin-panel">
            <div class="block-admin-panel">
                <div class="admin-block">
                    <div>
                        <img alt="" src="{{url('svg/hardware.svg')}}">
                    </div>
                    <button type="button" class="buttonUnder btn btn-success" onclick="window.location='{{ route("admin.panel_hardware") }}'">Redirect to Hardware</button>
                </div>
            </div>
            <div class="block-admin-panel">
                <div class="admin-block">
                    <div>
                        <img alt="" src="{{url('svg/benchmarks.svg')}}">
                    </div>
                    <button type="button" class="buttonUnder btn btn-success" onclick="window.location='{{ route("admin.panel_benchmark") }}'">Redirect to Benchmark</button>
                </div>
            </div>
            <div class="block-admin-panel">
                <div class="admin-block">
                    <div>
                        <img alt="" src="{{url('svg/users.svg')}}">
                    </div>
                    <button type="button" class="buttonUnder btn btn-success" onclick="window.location='{{ route("admin.panel_user") }}'">Redirect to User</button>
                </div>
            </div>
        </div>
    </div>
@endsection
