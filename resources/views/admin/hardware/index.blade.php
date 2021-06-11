@extends('layouts.base')
@section('body')
    <style type="text/css">
        .my-active span {
            background-color: #5cb85c !important;
            color: white !important;
            border-color: #5cb85c !important;
        }
    </style>
    <div class="container mt-4">
        @foreach($dontApproved as $indexApproved)
            <div class="container row b">
                <div class="col-6">
                    <div class="card mb-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $indexApproved->user->username }}</li>
                        </ul>
                    </div>
                </div>
                @can('admin')
                    <button type="button" class="btn btn-success" onclick="window.location='{{ route("admin.get_result_hardware", ['id' => $indexApproved->id]) }}'">Redirect to {{$indexApproved->id}}</button>
                @endcan
                @can('moderator')
                    <button type="button" class="btn btn-success" onclick="window.location='{{ route("moderator.get_result_hardware", ['id' => $indexApproved->id]) }}'">Redirect to {{$indexApproved->id}}</button>
                @endcan
            </div>
        @endforeach
        {{ $dontApproved->links('components.pagination') }}
    </div>
@endsection
