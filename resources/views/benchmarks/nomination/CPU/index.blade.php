@section('CPU')
    @if($nomination == 'CPU')
        <div class="container col-6">
            <div class="row pb-4">
                <div class="col">
                    <div class="list-group mt-3">
                        <a href="" class="headNomination list-group-item list-group-item-action flex-column align-items-start">
                            <p class="mb-1">Nomination: CPU</p>
                        </a>
                        @foreach($benchmarkCPUs as $indexCPU)
                            <a href="{{ url('benchmarks/'.$indexCPU->id) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Place: {{ $loop->iteration }}</h5>
                                </div>
                                <p class="mb-1">Score: {{ $indexCPU->score }}</p>
                                <div>
                                    <small class="sm">Enthusiast:
                                        <sm>{{ $indexCPU->user->username }}</sm>
                                    </small>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
