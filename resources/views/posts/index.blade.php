@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach ($posts as $post)
        <div class="offset-md-2">
            <div class="d-flex justify-content-start pb-2">
                <a href="{{ route('profile.show', $post->user->username) }}">
                    <img src="/storage/{{ $post->user->profile->image }}" alt="profile pic" class="rounded-circle" width="50">
                </a>
                <h4 class="pl-2 cursive pr-5">
                    <strong>{{ $post->user->username }}</strong>
                </h4>
            </div>
            <img src="/storage/{{ $post->image }}" alt="{{ $post->caption }}" width="614px">
            <div class="p-3">
                <h5 class="cursive">
                    <strong>{{ $post->user->username }}</strong>
                    {{ $post->caption }}
                </h5>
            </div>
        </div>
        @endforeach
        <div class="row pt-3 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
@endsection