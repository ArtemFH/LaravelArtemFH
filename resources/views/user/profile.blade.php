@extends('layouts.base')
@section('head')
    @parent
    <title>{{ $title }}: {{auth()->user()->username}}</title>
@endsection
@section('body')
    <div>
        <div class="container">
            <div class="container-profile">
                <div class="block-side block-profile">
                    <div class="content-profile info-block">
                        <div class="content-profile-image">
                            <img src="{{ $user->avatar }}">
                        </div>
                        <div class="content-profile-info">
                            <ul>
                                <li>Username: {{ $user->username }}</li>
                                <li>E-mail: {{ $user->email }}</li>
                                <li>Like Nomination: {{ $user->like_nomination->name }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="block-center block-profile">
                    <div class="content-profile">
                        <div class="col contains">
                            <div class="list-group">
                                <a href="{{ route('home.head') }}" class="headNomination list-group-item list-group-item-action flex-column align-items-start">
                                    <p class="mb-1" style="font-size: 20px">Best Result</p>
                                </a>
                                @if($bestCPU)
                                    <a href="{{ url('benchmarks/'.$bestCPU->id) }}" class="list-group-item list-group-item-profile list-group-item-action flex-column align-items-start">
                                        <div class="row row-result">
                                            <div class="col-3 nomination-block">
                                                CPU
                                            </div>
                                            <div class="col-9" style="margin: auto;">
                                                <p class="mb-1">Score: {{ $bestCPU->score }}</p>
                                                <div>
                                                    <small>Enthusiast:
                                                        <span class="enthusiast">{{ $bestCPU->user->username }}</span>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @else
                                    <a href="" class="list-group-item list-group-item-profile list-group-item-action flex-column align-items-start">
                                        <div class="row row-result">
                                            <div class="col-3 nomination-block">
                                                CPU
                                            </div>
                                            <div class="col-9" style="margin: auto;">
                                                <p class="mb-1">Score: None</p>
                                                <div>
                                                    <small>Enthusiast: None
                                                        <span class="enthusiast"></span>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endif
                                @if($bestGPU)
                                    <a href="{{ url('benchmarks/'.$bestGPU->id) }}" class="list-group-item list-group-item-profile list-group-item-action flex-column align-items-start">
                                        <div class="row row-result">
                                            <div class="col-3 nomination-block">
                                                GPU
                                            </div>
                                            <div class="col-9" style="margin: auto;">
                                                <p class="mb-1">Score: {{ $bestGPU->score }}</p>
                                                <div>
                                                    <small>Enthusiast:
                                                        <span class="enthusiast">{{ $bestGPU->user->username }}</span>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @else
                                    <a href="" class="list-group-item list-group-item-profile list-group-item-action flex-column align-items-start">
                                        <div class="row row-result">
                                            <div class="col-3 nomination-block">
                                                GPU
                                            </div>
                                            <div class="col-9" style="margin: auto;">
                                                <p class="mb-1">Score: None</p>
                                                <div>
                                                    <small>Enthusiast: None
                                                        <span class="enthusiast"></span>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endif
                                @if($bestRAM)
                                    <a href="{{ url('benchmarks/'.$bestRAM->id) }}" class="list-group-item list-group-item-profile list-group-item-action flex-column align-items-start">
                                        <div class="row row-result">
                                            <div class="col-3 nomination-block">
                                                RAM
                                            </div>
                                            <div class="col-9" style="margin: auto;">
                                                <p class="mb-1">Score: {{ $bestRAM->score }}</p>
                                                <div>
                                                    <small>Enthusiast:
                                                        <span class="enthusiast">{{ $bestRAM->user->username }}</span>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @else
                                    <a href="" class="list-group-item list-group-item-profile list-group-item-action flex-column align-items-start">
                                        <div class="row row-result">
                                            <div class="col-3 nomination-block">
                                                RAM
                                            </div>
                                            <div class="col-9" style="margin: auto;">
                                                <p class="mb-1">Score: None</p>
                                                <div>
                                                    <small>Enthusiast: None
                                                        <span class="enthusiast"></span>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @if(\App\Models\Hardware::where('user_id', \Illuminate\Support\Facades\Auth::id())->where('approved', false)->where('reject', false)->first())
                    <div class="block-side block-profile">
                        <div class="content-profile">
                            <div class="col contains">
                                <div>
                                    <div class="headNomination list-group-item list-group-item-action flex-column align-items-start">
                                        Messages
                                    </div>
                                    <div class="profile-block-item list-group-item list-group-item-profile list-group-item-action flex-column align-items-start" style="height: 271px;">
                                        <h4>Your equipment is still under review</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif (\App\Models\Hardware::where('user_id', \Illuminate\Support\Facades\Auth::id())->where('approved', false)->where('reject', true)->first())
                    <div class="block-side block-profile">
                        <div class="content-profile">
                            <div class="col contains">
                                <div>
                                    <div class="headNomination list-group-item list-group-item-action flex-column align-items-start">
                                        Messages
                                    </div>
                                    <div class="profile-block-item list-group-item list-group-item-profile list-group-item-action flex-column align-items-start" style="height: 271px;">
                                        <h4>Your equipment has been checked and rejected</h4>
                                        <button type="button" class="buttonUnder btn btn-success" onclick="window.location='{{ route('user.understandHardware') }}'">I understand</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif (\App\Models\Hardware::where('user_id', \Illuminate\Support\Facades\Auth::id())->where('approved', true)->where('reject', false)->first())
                    @if(\App\Models\Benchmark::where('user_id', \Illuminate\Support\Facades\Auth::id())->where('approved', false)->where('reject', true)->first())
                        <div class="block-side block-profile">
                            <div class="content-profile">
                                <div class="col contains">
                                    <div>
                                        <div class="headNomination list-group-item list-group-item-action flex-column align-items-start">
                                            Messages
                                        </div>
                                        <div class="profile-block-item list-group-item list-group-item-profile list-group-item-action flex-column align-items-start" style="height: 271px;">
                                            <h4>You have rejected results and they are not displayed publicly</h4>
                                            <button type="button" class="buttonUnder btn btn-success" onclick="window.location='{{ route('user.understandBenchmark') }}'">I understand</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="block-side block-profile">
                            <div class="content-profile">
                                <div class="col contains">
                                    <div>
                                        <div class="headNomination list-group-item list-group-item-action flex-column align-items-start">
                                            Messages
                                        </div>
                                        <div class="profile-block-item list-group-item list-group-item-profile list-group-item-action flex-column align-items-start" style="height: 271px;">
                                            <h4>You can submit the results for review</h4>
                                            <button type="button" class="buttonUnder btn btn-success" onclick="window.location='{{ route('user.requestBenchmark') }}'">Submit benchmark result</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @else
                    <div class="block-side block-profile">
                        <div class="content-profile">
                            <div class="col contains">
                                <div>
                                    <div class="headNomination list-group-item list-group-item-action flex-column align-items-start">
                                        Messages
                                    </div>
                                    <div class="profile-block-item list-group-item list-group-item-profile list-group-item-action flex-column align-items-start" style="height: 271px;">
                                        <h4>You can't send the results for verification because you haven't confirmed your hardware</h4>
                                        <button type="button" class="buttonUnder btn btn-success" onclick="window.location='{{ route('user.requestHardware') }}'">Submit Hardware</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="bottom-container-profile">
                <div class="bottom-block-profile">
                    @if($hardware == !null)
                        <div>
                            <div></div>
                            <div>
                                <div>
                                    <img src="">
                                    <div>{{ $hardware->CPU }}</div>
                                    <span></span>
                                </div>
                                <div>
                                    <img src="">
                                    <div>{{ $hardware->GPU }}</div>
                                    <span></span>
                                </div>
                                <div>
                                    <img src="">
                                    <div>{{ $hardware->RAM }}</div>
                                    <span></span>
                                </div>
                                <div>
                                    <img src="">
                                    <div>{{ $hardware->PSU }}</div>
                                    <span></span>
                                </div>
                                <div>
                                    <img src="">
                                    <div>{{ $hardware->storage }}</div>
                                    <span></span>
                                </div>
                                <div>
                                    <img src="">
                                    <div>{{ $hardware->motherboard }}</div>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    @else
                    @endif
                </div>
            </div>
        </div>
    </div>
    {{--    @auth--}}
    {{--        @if($hardware == !null)--}}
    {{--            <ul class="p-3 w-50 list-group">--}}
    {{--                <li class="list-group-item">CPU: {{ $hardware->CPU }}</li>--}}
    {{--                <li class="list-group-item">GPU: {{ $hardware->GPU }}</li>--}}
    {{--                <li class="list-group-item">RAM: {{ $hardware->RAM }}</li>--}}
    {{--                <li class="list-group-item">PSU: {{ $hardware->PSU }}</li>--}}
    {{--                <li class="list-group-item">Storage: {{ $hardware->storage }}</li>--}}
    {{--                <li class="list-group-item">Motherboard: {{ $hardware->motherboard }}</li>--}}
    {{--                @if($hardware->approved == 0 and $hardware->reject == 0)--}}
    {{--                    <li class="list-group-item active">Status: Under consideration</li>--}}
    {{--                @elseif($hardware->approved == 1 and $hardware->reject == 0)--}}
    {{--                    <li class="list-group-item" style="background: #dcbd4361">Status: Confirmed</li>--}}
    {{--                @else--}}
    {{--                    <li class="list-group-item active">Status: Rejected</li>--}}
    {{--                @endif--}}
    {{--            </ul>--}}
    {{--    @if(!\App\Models\Benchmark::where('user_id', \Illuminate\Support\Facades\Auth::id())->where('approved', false)->where('reject', true)->first())--}}
    {{--        @if(!\App\Models\Hardware::where('user_id', \Illuminate\Support\Facades\Auth::id())->where('approved', false)->get()->first())--}}
    {{--            <button type="button" class="btn btn-success" onclick="window.location='{{ route('user.requestBenchmark') }}'">Submit benchmark result</button>--}}
    {{--        @endif--}}
    {{--    @else--}}
    {{--        <h3>Your application for results was rejected--}}
    {{--            <button type="button" class="btn btn-success" onclick="window.location='{{ route('user.understandBenchmark') }}'">I understand</button>--}}
    {{--        </h3>--}}
    {{--    @endif--}}
    {{--    @if(!\App\Models\Hardware::where('user_id', \Illuminate\Support\Facades\Auth::id())->where('approved', false)->where('reject', true)->first())--}}
    {{--        <button type="button" class="btn btn-success" onclick="window.location='{{ route('user.updateHardware') }}'">Update hardware</button>--}}
    {{--    @else--}}
    {{--        <h3>Your application for hardware was rejected--}}
    {{--            <button type="button" class="btn btn-success" onclick="window.location='{{ route('user.understandHardware') }}'">I understand</button>--}}
    {{--        </h3>--}}
    {{--    @endif--}}
    {{--    <button type="button" class="btn btn-danger" onclick="window.location='{{ route('user.deleteHardware') }}'">Delete hardware</button>--}}
    {{--    @else--}}
    {{--        <button type="button" class="btn btn-success" onclick="window.location='{{ route('user.requestHardware') }}'">Fill in hardware</button>--}}
    {{--    @endif--}}
    {{--    @endauth--}}
@endsection
