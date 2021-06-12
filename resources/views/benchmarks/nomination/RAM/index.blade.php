@section('RAM')
    @if($nomination == 'RAM')
        <div class="single-container col-6">
            <div class="row pb-4">
                <div class="col">
                    <div class="list-group mt-3">
                        <a href="" class="headNomination list-group-item-text list-group-item list-group-item-action flex-column align-items-start">
                            <p class="mb-1">Nomination: RAM</p>
                        </a>
                        @if($benchmarkRAMs->first())
                            @foreach($benchmarkRAMs as $indexRAM)
                                <a href="{{ url('benchmarks/'.$indexRAM->id) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="block-result row">
                                        <div class="col-4 block-result-left">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Place: {{ $loop->iteration }}</h5>
                                            </div>
                                            <p class="mb-1">Score: {{ $indexRAM->score }}</p>
                                            <div>
                                                <small>Enthusiast:
                                                    <span class="enthusiast">{{ $indexRAM->username }}</span>
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-8 block-result-right">
                                            <div>
                                                <div class="block-none">
                                                    <img class="svg-result" src="{{url("/svg/ram.svg")}}">
                                                    <div style="padding: 10px">
                                                        Details: {{ $indexRAM->RAM }}
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="{{ $indexRAM->avatar }}" alt="post-image" class="card-image">
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        @else
                            <a class="list-group-item list-group-item-action flex-column align-items-start">
                                <p class="mb-1">None info</p>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
