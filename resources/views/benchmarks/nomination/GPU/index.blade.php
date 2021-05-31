@section('GPU')
    @if($nomination == 'GPU')
        <div class="container col-6">
            <div class="row pb-4">
                <div class="col">
                    <div class="list-group mt-3">
                        <a href="" class="headNomination list-group-item list-group-item-action flex-column align-items-start">
                            <p class="mb-1">Nomination: GPU</p>
                        </a>
                        @foreach($benchmarkGPUs as $indexGPU)
                            <a href="{{ url('benchmarks/'.$indexGPU->id) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Place: {{ $loop->iteration }}</h5>
                                </div>
                                <p class="mb-1">Score: {{ $indexGPU->score }}</p>
                                <div>
                                    <small class="sm">Enthusiast:
                                        <sm>{{ $indexGPU->user->username }}</sm>
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
