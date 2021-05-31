@extends('layouts.base')
@section('head')
    @parent
    <title>{{ $title }}: {{auth()->user()->username}}</title>
@endsection
@section('body')
    @auth
        @foreach($awards->awards_id as $name)
            <div>{{\App\Models\Award::find($name)->name}}</div>
        @endforeach
        @if($hardware == !null)
            {{--            <ul class="p-3 w-50 list-group">--}}
            {{--                <li class="list-group-item">Любимая номинация: {{ $hardware->user->like_nomination->name }}</li>--}}
            {{--            </ul>--}}
            <ul class="p-3 w-50 list-group">
                <li class="list-group-item">CPU: {{ $hardware->CPU }}</li>
                <li class="list-group-item">GPU: {{ $hardware->GPU }}</li>
                <li class="list-group-item">RAM: {{ $hardware->RAM }}</li>
                <li class="list-group-item">PSU: {{ $hardware->PSU }}</li>
                <li class="list-group-item">Storage: {{ $hardware->storage }}</li>
                <li class="list-group-item">Motherboard: {{ $hardware->motherboard }}</li>
                @if($hardware->approved == 0)
                    <li class="list-group-item">Статус: В рассмотрений</li>
                @else
                    <li class="list-group-item active">Статус: Подтверждено</li>
                @endif
            </ul>
            <a class="nav-link" href="{{ route('user.requestBenchmark') }}">
                <button class="m-3 btn btn-success">Submit benchmark result</button>
            </a>
            <a class="nav-link" href="{{ route('user.updateHardware') }}">
                <button class="m-3 btn btn-success">Update hardware</button>
            </a>
            <a class="nav-link" href="{{ route('user.deleteHardware') }}">
                <button class="m-3 btn btn-danger">Delete hardware</button>
            </a>
        @else
            <a class="nav-link" href="{{ route('user.requestHardware') }}">
                <button class="m-3 btn btn-success">Fill in hardware</button>
            </a>
        @endif
    @endauth
@endsection
