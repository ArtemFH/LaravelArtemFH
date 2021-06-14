@extends('layouts.base')
@section('head')
    @parent
    <title>{{ $title }}</title>
@endsection
@section('body')
    <div class="container mt-4">
        @if($dontApproved->first())
            <div class="container-users">
                @foreach($dontApproved as $indexHardware)
                    <div class="index-user">
                        <div style="min-width: 200px;">
                            <div class="top-block-user">
                                <span>Hardware: {{ \App\Models\Hardware::where('user_id', $indexHardware->user->id)->value($indexHardware->user->like_nomination->name)}}</span>
                                <span>Enthusiast: {{ $indexHardware->user->username }}</span>
                                <span>Like Nomination: {{ $indexHardware->user->like_nomination->name }}</span>
                            </div>
                            <div class="bottom-block-user">
                                @can('admin')
                                    <button type="button" class="buttonGet btn btn-success" onclick="window.location='{{ route("admin.get_result_hardware", ['id' => $indexHardware->id]) }}'">Redirect to {{$indexHardware->id}}</button>
                                @endcan
                                @can('moderator')
                                    <button type="button" class="buttonGet btn btn-success" onclick="window.location='{{ route("moderator.get_result_hardware", ['id' => $indexHardware->id]) }}'">Redirect to {{$indexHardware->id}}</button>
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
