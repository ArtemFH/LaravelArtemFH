@extends('layouts.base')

@section('body')
    <div class="row container m-auto">
        <div class="col-6">
            <button type="button" class="btn btn-success" onclick="window.location='{{ route("moderator.panel_hardware") }}'">Redirect to Hardware</button>
        </div>
        <div class="col-6">
            <button type="button" class="btn btn-success" onclick="window.location='{{ route("moderator.panel_benchmark") }}'">Redirect to Benchmark</button>
        </div>
    </div>
@endsection
