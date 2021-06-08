@section('body')
    <div class="container mt-4">
        @foreach($users as $user)
            <div class="container row b">
                <div class="col-6">
                    <div class="card mb-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $user->username }}</li>
                            <li class="list-group-item">{{ $user->email }}</li>
                            <li class="list-group-item">{{ $user->role->name }}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    @if($user->role->name == 'user')
                        <button type="button" class="btn btn-success"
                                onclick="window.location='{{ route('admin.update_moderator', ['id' => $user->id]) }}'">
                            Make a moderator
                        </button>
                    @endif
                    @if($user->role->name == 'moderator')
                        <button type="button" class="btn btn-success"
                                onclick="window.location='{{ route('admin.update_user', ['id' => $user->id]) }}'">
                            Make a user
                        </button>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection
