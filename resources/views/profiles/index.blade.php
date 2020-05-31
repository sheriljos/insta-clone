@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 d-flex justify-content-center">
            <img src="{{ $user->profile->getImage() }}" 
                    alt="profile pic"
                    width=200
                    class="rounded-circle">
        </div>

        <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex pb-3">
                    <div class="h4">{{ $user->username }}</div>
                    <follow-button></follow-button>
                </div>
                @can('update', $user->profile)                    
                    <a href="{{ route('post.create')}}">
                        <strong>Add posts</strong>
                    </a>
                @endcan
            </div>
            @can('update', $user->profile)               
                <a href="{{ route('profile.edit', $user->id)}}">
                    <strong>Edit Profile</strong>
                </a>
            @endcan
            <div class="d-flex pt-2 pb-3">
                <div class="pr-4"><strong>{{ $user->posts->count() }} </strong>posts</div>
                <div class="pr-4"><strong>1040 </strong>followers</div>
                <div class="pr-4"><strong>62 </strong>following</div>
            </div>
            <div>
                <strong>{{ $user->profile->title }}</strong>
            </div>
            <div>{{ $user->profile->description }}</div>
            <div>
                <a href="#" class="nounderline dark-color"><strong>{{ $user->profile->url }}</strong></a>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach ( $user->posts as $post)
            <div class="col-4 pb-3">
                <a href="{{ route('post.show', $post->id) }}" >
                    <img src="/storage/{{ $post->image }}" alt="{{ $post->caption }}" class="w-100 h-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
