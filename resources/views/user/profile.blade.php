@extends('layouts.base')
@section('head')
    @parent
    <title>{{ $title }}: {{auth()->user()->username}}</title>
@endsection
@section('body')
    @auth
        @if($hardware == !null)
            <ul class="p-3 w-50 list-group">
                <li class="list-group-item">CPU: {{ $hardware->CPU }}</li>
                <li class="list-group-item">GPU: {{ $hardware->GPU }}</li>
                <li class="list-group-item">RAM: {{ $hardware->RAM }}</li>
                <li class="list-group-item">PSU: {{ $hardware->PSU }}</li>
                <li class="list-group-item">Storage: {{ $hardware->storage }}</li>
                <li class="list-group-item">Motherboard: {{ $hardware->motherboard }}</li>
                @if($hardware->approved == 0 and $hardware->reject == 0)
                    <li class="list-group-item active">Status: Under consideration</li>
                @elseif($hardware->approved == 1 and $hardware->reject == 0)
                    <li class="list-group-item" style="background: #dcbd4361">Status: Confirmed</li>
                @else
                    <li class="list-group-item active">Status: Rejected</li>
                @endif
            </ul>
            @if(!\App\Models\Benchmark::where('user_id', \Illuminate\Support\Facades\Auth::id())->where('approved', false)->where('reject', true)->first())
                @if(!\App\Models\Hardware::where('user_id', \Illuminate\Support\Facades\Auth::id())->where('approved', false)->get()->first())
                    <button type="button" class="btn btn-success" onclick="window.location='{{ route('user.requestBenchmark') }}'">Submit benchmark result</button>
                @endif
            @else
                <h3>Your application for results was rejected
                    <button type="button" class="btn btn-success" onclick="window.location='{{ route('user.understandBenchmark') }}'">I understand</button>
                </h3>
            @endif
            @if(!\App\Models\Hardware::where('user_id', \Illuminate\Support\Facades\Auth::id())->where('approved', false)->where('reject', true)->first())
                <button type="button" class="btn btn-success" onclick="window.location='{{ route('user.updateHardware') }}'">Update hardware</button>
            @else
                <h3>Your application for hardware was rejected
                    <button type="button" class="btn btn-success" onclick="window.location='{{ route('user.understandHardware') }}'">I understand</button>
                </h3>
            @endif
            <button type="button" class="btn btn-danger" onclick="window.location='{{ route('user.deleteHardware') }}'">Delete hardware</button>
        @else
            <button type="button" class="btn btn-success" onclick="window.location='{{ route('user.requestHardware') }}'">Fill in hardware</button>
        @endif
    @endauth
@endsection
