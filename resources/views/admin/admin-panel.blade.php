@extends('layouts.base')

@section('body')
    <div class="row container m-auto">
        <div class="col-4">
            <button type="button" class="btn btn-success" onclick="window.location='{{ route("admin.panel_hardware") }}'">Redirect to Hardware</button>
        </div>
        <div class="col-4">
            <button type="button" class="btn btn-success" onclick="window.location='{{ route("admin.panel_benchmark") }}'">Redirect to Benchmark</button>
        </div>
        <div class="col-4">
            <button type="button" class="btn btn-success" onclick="window.location='{{ route("admin.panel_user") }}'">Redirect to User</button>
        </div>
    </div>
@endsection
