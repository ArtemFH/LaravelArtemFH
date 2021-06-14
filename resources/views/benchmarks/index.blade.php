@section('body')
    <div class="container">
        <div class="row pb-4 div-contains">
            <div class="col contains">
                <div class="list-group mt-3">
                    <a href="{{ route('results.CPU') }}" class="headNomination list-group-item list-group-item-action flex-column align-items-start">
                        <p class="mb-1">Nomination: CPU</p>
                    </a>
                    @if($benchmarkCPUs->first())
                        @foreach($benchmarkCPUs as $indexCPU)
                            <a href="{{ url('benchmarks/'.$indexCPU->id) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Place: {{ $loop->iteration }}</h5>
                                </div>
                                <p class="mb-1">Score: {{ $indexCPU->score }}</p>
                                <div>
                                    <small>Enthusiast:
                                        <span class="enthusiast">{{ $indexCPU->username }}</span>
                                    </small>
                                </div>
                            </a>
                        @endforeach
                    @else
                        <a class="list-group-item list-group-item-action flex-column align-items-start">
                            <p class="mb-2">None info</p>
                        </a>
                    @endif
                </div>
            </div>
            <div class="col contains">
                <div class="list-group mt-3">
                    <a href="{{ route('results.GPU') }}" class="headNomination list-group-item list-group-item-action flex-column align-items-start">
                        <p class="mb-1">Nomination: GPU</p>
                    </a>
                    @if($benchmarkGPUs->first())
                        @foreach($benchmarkGPUs as $indexGPU)
                            <a href="{{ url('benchmarks/'.$indexGPU->id) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Place: {{ $loop->iteration }}</h5>
                                </div>
                                <p class="mb-1">Score: {{ $indexGPU->score }}</p>
                                <div>
                                    <small>Enthusiast:
                                        <span class="enthusiast">{{ $indexGPU->username }}</span>
                                    </small>
                                </div>
                            </a>
                        @endforeach
                    @else
                        <a class="list-group-item list-group-item-action flex-column align-items-start">
                            <p class="mb-2">None info</p>
                        </a>
                    @endif
                </div>
            </div>
            <div class="col contains">
                <div class="list-group mt-3">
                    <a href="{{ route('results.RAM') }}" class="headNomination list-group-item list-group-item-action flex-column align-items-start">
                        <p class="mb-1">Nomination: RAM</p>
                    </a>
                    @if($benchmarkRAMs->first())
                        @foreach($benchmarkRAMs as $indexRAM)
                            <a href="{{ url('benchmarks/'.$indexRAM->id) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Place: {{ $loop->iteration }}</h5>
                                </div>
                                <p class="mb-1">Score: {{ $indexRAM->score }}</p>
                                <div>
                                    <small>Enthusiast:
                                        <span class="enthusiast">{{ $indexRAM->username }}</span>
                                    </small>
                                </div>
                            </a>
                        @endforeach
                    @else
                        <a class="list-group-item list-group-item-action flex-column align-items-start">
                            <p class="mb-2">None info</p>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
