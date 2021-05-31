@section('body')
    <div class="container mt-4">
        {{--        {{dd($users)}}--}}
        @foreach($users as $user)
            <div class="card mb-3">
                {{--                                {{ dd($user->role) }}--}}
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $user->username }}</li>
                    <li class="list-group-item">{{ $user->email }}</li>
                    {{--                    {{ dd($user) }}--}}
                    <li class="list-group-item">{{ $user->role->name }}</li>
                </ul>
            </div>
            {{--            @if($user->role->name == 'user')--}}
            {{--                <button type="button" class="btn btn-success">Moderator</button>--}}
            {{--            @endif--}}
            @can('moderator')
                <button type="button" class="btn btn-danger">User</button>
            @endcan
        @endforeach
    </div>
@endsection
