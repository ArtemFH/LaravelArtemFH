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
                            <img alt="" src="{{ $user->avatar }}">
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
                @if($hardware == !null)
                    <div class="top-block-hardware">
                        <div class="block-button-status">
                            <div class="block-button-status-child">
                                <button type="button" class="button-status buttonUnder btn btn-success" onclick="window.location='{{ route('user.updateHardware') }}'">Update hardware</button>
                                <button type="button" class="button-status buttonUnder btn btn-danger" onclick="window.location='{{ route('user.deleteHardware') }}'">Delete hardware</button>
                            </div>
                        </div>
                        @if($hardware->approved == false and $hardware->reject == false)
                            <div class="status-block status-under">
                                <div class="status-block-text">
                                    Status: Under consideration
                                </div>
                            </div>
                        @elseif($hardware->approved == true and $hardware->reject == false)
                            <div class="status-block status-confirmed">
                                <div class="status-block-text">
                                    Status: Confirmed
                                </div>
                            </div>
                        @elseif($hardware->approved == false and $hardware->reject == true)
                            <div class="status-block status-reject">
                                <div class="status-block-text">
                                    Status: Rejected
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="bottom-block-profile">
                        <div>
                            <div></div>
                            <div class="hardware-detail-info">
                                <div class="hardware-detail-block">
                                    <img alt="" src="{{url('svg/cpu.svg')}}">
                                    <div class="info-hardware-high">{{ $hardware->CPU }}</div>
                                    <span class="info-hardware-low">CPU</span>
                                </div>
                                <div class="hardware-detail-block">
                                    <img alt="" src="{{url('svg/motherboard.svg')}}">
                                    <div class="info-hardware-high">{{ $hardware->motherboard }}</div>
                                    <span class="info-hardware-low">MotherBoard</span>
                                </div>
                                <div class="hardware-detail-block">
                                    <img alt="" src="{{url('svg/gpu.svg')}}">
                                    <div class="info-hardware-high">{{ $hardware->GPU }}</div>
                                    <span class="info-hardware-low">GPU</span>
                                </div>
                                <div class="hardware-detail-block">
                                    <img alt="" src="{{url('svg/ram.svg')}}">
                                    <div class="info-hardware-high">{{ $hardware->RAM }}</div>
                                    <span class="info-hardware-low">RAM</span>
                                </div>
                                <div class="hardware-detail-block">
                                    <img alt="" src="{{url('svg/psu.svg')}}">
                                    <div class="info-hardware-high">{{ $hardware->PSU }}</div>
                                    <span class="info-hardware-low">PSU</span>
                                </div>
                                <div class="hardware-detail-block">
                                    <img alt="" src="{{url('svg/storage.svg')}}">
                                    <div class="info-hardware-high">{{ $hardware->storage }}</div>
                                    <span class="info-hardware-low">Storage</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="top-block-hardware">
                        <div class="status-block status-under">
                            <div class="status-block-text">
                                Status: Not available
                            </div>
                        </div>
                    </div>
                    <div class="bottom-block-profile">
                        <div>
                            <div></div>
                            <div class="hardware-detail-info">
                                <div class="hardware-detail-block">
                                    <img alt="" src="{{url('svg/cpu.svg')}}">
                                    <div class="info-hardware-high">Is unknown</div>
                                    <span class="info-hardware-low">CPU</span>
                                </div>
                                <div class="hardware-detail-block">
                                    <img alt="" src="{{url('svg/motherboard.svg')}}">
                                    <div class="info-hardware-high">Is unknown</div>
                                    <span class="info-hardware-low">MotherBoard</span>
                                </div>
                                <div class="hardware-detail-block">
                                    <img alt="" src="{{url('svg/gpu.svg')}}">
                                    <div class="info-hardware-high">Is unknown</div>
                                    <span class="info-hardware-low">GPU</span>
                                </div>
                                <div class="hardware-detail-block">
                                    <img alt="" src="{{url('svg/ram.svg')}}">
                                    <div class="info-hardware-high">Is unknown</div>
                                    <span class="info-hardware-low">RAM</span>
                                </div>
                                <div class="hardware-detail-block">
                                    <img alt="" src="{{url('svg/psu.svg')}}">
                                    <div class="info-hardware-high">Is unknown</div>
                                    <span class="info-hardware-low">PSU</span>
                                </div>
                                <div class="hardware-detail-block">
                                    <img alt="" src="{{url('svg/storage.svg')}}">
                                    <div class="info-hardware-high">Is unknown</div>
                                    <span class="info-hardware-low">Storage</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
