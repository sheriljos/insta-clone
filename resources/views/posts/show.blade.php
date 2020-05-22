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
                {{-- Title  --}}
                <div class="d-flex justify-content-center">
                    <h1 class="cursive">{{ $post->caption }}</h1>
                </div>

                {{-- Image --}}
                <div class="d-flex justify-content-center">
                    <img src="/storage/{{ $post->image }}" alt="{{ $post->caption }}" width="550" height="600" />
                </div>
            </div>
        </div>
    </div>
@endsection