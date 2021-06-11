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
                        <li class="list-group-item">{{ $getHardware->CPU }}</li>
                        <li class="list-group-item">{{ $getHardware->GPU }}</li>
                        <li class="list-group-item">{{ $getHardware->RAM }}</li>
                        <li class="list-group-item">{{ $getHardware->PSU }}</li>
                        <li class="list-group-item">{{ $getHardware->storage }}</li>
                        <li class="list-group-item">{{ $getHardware->motherboard }}</li>
                        <li class="list-group-item">{{ $getHardware->user->username }}</li>
                        <li class="list-group-item">{{ $getHardware->approved }}</li>
                    </ul>
                </div>
            </div>
            @can('admin')
                <button type="button" class="btn btn-success" onclick="window.location='{{ route("admin.approved_result_hardware", ['id' => $getHardware->id]) }}'">Approved Result{{$getHardware->id}}</button>
                <button type="button" class="btn btn-danger" onclick="window.location='{{ route("admin.reject_result_hardware", ['id' => $getHardware->id]) }}'">Reject Result{{$getHardware->id}}</button>
            @endcan
            @can('moderator')
                <button type="button" class="btn btn-success" onclick="window.location='{{ route("moderator.approved_result_hardware", ['id' => $getHardware->id]) }}'">Approved Result{{$getHardware->id}}</button>
                <button type="button" class="btn btn-danger" onclick="window.location='{{ route("moderator.reject_result_hardware", ['id' => $getHardware->id]) }}'">Reject Result{{$getHardware->id}}</button>
            @endcan
        </div>
    </div>
@endsection
