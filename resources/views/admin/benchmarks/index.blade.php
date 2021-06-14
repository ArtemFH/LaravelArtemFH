@extends('layouts.base')
@section('head')
    @parent
    <title>{{ $title }}</title>
@endsection
@section('body')
    <div class="container mt-4">
        @if($dontApproved->first())
            <div class="container-users">
                @foreach($dontApproved as $indexBenchmark)
                    <div class="index-user">
                        <div style="min-width: 200px;">
                            <div class="top-block-user">
                                <span>Score: {{ $indexBenchmark->score }}</span>
                                <span>Enthusiast: {{ $indexBenchmark->user->username }}</span>
                                <span>Nomination: {{ $indexBenchmark->nomination->name }}</span>
                            </div>
                            <div class="bottom-block-user">
                                @can('admin')
                                    <button type="button" class="buttonGet btn btn-success" onclick="window.location='{{ route("admin.get_result_benchmark", ['id' => $indexBenchmark->id]) }}'">Redirect to {{$indexBenchmark->id}}</button>
                                @endcan
                                @can('moderator')
                                    <button type="button" class="buttonGet btn btn-success" onclick="window.location='{{ route("moderator.get_result_benchmark", ['id' => $indexBenchmark->id]) }}'">Redirect to {{$indexBenchmark->id}}</button>
                                @endcan
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pagination-block">
                {{ $dontApproved->links('components.pagination') }}
            </div>
        @else
            <div class="dontindex">None details</div>
        @endif
    </div>
@endsection
