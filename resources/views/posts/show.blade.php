@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="float-right pt-2">
            <a href="{{ route('profile.show', $post->user->username) }}">
                <img src="/images/cross.svg" alt="icon" width=30>
            </a>
        </div>
        <div class="row d-flex justify-content-center pt-5">
            <div class="col-8 pt-5">
                {{-- Image --}}
                <div class="d-flex justify-content-center">
                    <img src="/storage/{{ $post->image }}" alt="{{ $post->caption }}" width="550" height="600" />
                </div>
            </div>
            <div class="col-4 pt-5">
                <div class="row d-flex align-items-center">
                    <a href="{{ route('profile.show', $post->user->username) }}">
                        <img src="/storage/{{ $post->user->profile->image }}" alt="profile pic" class="rounded-circle" width="50">
                    </a>
                    <h4 class="pl-2 cursive pr-5">
                        <strong>{{ $post->user->username }}</strong>
                    </h4>
                    <a href="#" class="pl-5">
                        <strong>Follow</strong>
                    </a>
                </div>
                <div class="border-bottom pt-2" ></div>
                {{-- Title  --}}
                <div class="row d-flex justify-content-center pt-2">
                    <h5 class="cursive pl-3">{{ $post->caption }}</h5>
                </div>
            </div>
        </div>
    </div>
@endsection