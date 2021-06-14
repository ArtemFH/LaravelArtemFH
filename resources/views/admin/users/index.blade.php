@extends('layouts.base')
@section('head')
    @parent
    <title>{{ $title }}</title>
@endsection
@section('body')
    <div class="container mt-4">
        <div class="container-users">
            @foreach($users as $user)
                <div class="index-user">
                    <div style="min-width: 200px;">
                        <div class="top-block-user">
                            <span>Username: {{ $user->username }}</span>
                            <span>E-mail: {{ $user->email }}</span>
                            <span>Role: {{ $user->role->name }}</span>
                        </div>
                        <div class="bottom-block-user">
                            @if($user->role->name == 'user')
                                <button type="button" class="buttonGet btn btn-success" onclick="window.location='{{ route('admin.update_moderator', ['id' => $user->id]) }}'">Make a moderator</button>
                            @endif
                            @if($user->role->name == 'moderator')
                                <button type="button" class="buttonGet btn btn-success" onclick="window.location='{{ route('admin.update_user', ['id' => $user->id]) }}'">Make a user</button>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pagination-block">
            {{ $users->links('components.pagination') }}
        </div>
    </div>
@endsection
