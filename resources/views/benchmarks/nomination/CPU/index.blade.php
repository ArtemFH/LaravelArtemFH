@section('CPU')
    @if($nomination == 'CPU')
        <div class="single-container col-6">
            <div class="row pb-4">
                <div class="col">
                    <div class="list-group mt-3">
                        <a href="" class="headNomination list-group-item-text list-group-item list-group-item-action flex-column align-items-start">
                            <p class="mb-1">Nomination: CPU</p>
                        </a>
                        @foreach($benchmarkCPUs as $indexCPU)
                            @if($indexCPU->user->hardware->first() != null)
                                @if($indexCPU->user->hardware->first()->approved == true)
                                    <a href="{{ url('benchmarks/'.$indexCPU->id) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="block-result row">
                                            <div class="col-4 block-result-left">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1">Place: {{ $loop->iteration }}</h5>
                                                </div>
                                                <p class="mb-1">Score: {{ $indexCPU->score }}</p>
                                                <div>
                                                    <small>Enthusiast:
                                                        <span class="enthusiast">{{ $indexCPU->user->username }}</span>
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-8 block-result-right">
                                                <div>
                                                    <div class="block-none">
                                                        <img class="svg-result" src="{{url("/svg/cpu.svg")}}">
                                                        <div style="padding: 10px">
                                                            Details: {{ $indexCPU->user->hardware->first()->CPU }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="{{ $indexCPU->user->avatar }}" alt="post-image" class="card-image">
                                            </div>
                                        </div>
                                    </a>
                                @endif
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
