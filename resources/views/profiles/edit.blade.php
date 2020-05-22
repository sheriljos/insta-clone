@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="POST" enctype="multipart/form-data"  action="{{ route('profile.update') }}">
            @csrf
            <div class="col-8 offset-2 pt-3 pl-0">
                {{-- Title  --}}
                <h1 class="cursive">Edit your story</h1>
                {{-- Name --}}
                <div class="row">
                    <label for="name" class="col-form-label text-md-right">{{ __('Title') }}</label>

                    <input id="title" 
                        type="text" 
                        class="form-control @error('title') is-invalid @enderror" 
                        name="title" 
                        value="{{ old('title') ?? $user->profile->title }}" 
                        autocomplete="title" 
                        autofocus>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- Description --}}
                <div class="row">
                    <label for="description" class="col-form-label text-md-right">{{ __('Description') }}</label>

                    <input id="description" 
                        type="text" 
                        class="form-control @error('description') is-invalid @enderror" 
                        name="description" 
                        value="{{ old('description') ?? $user->profile->description }}" 
                        autocomplete="description" 
                        autofocus>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- Url --}}
                <div class="row">
                    <label for="url" class="col-form-label text-md-right">{{ __('Website') }}</label>

                    <input id="url" 
                        type="text" 
                        class="form-control @error('url') is-invalid @enderror" 
                        name="url" 
                        value="{{ old('url') ?? $user->profile->url }}" 
                        autocomplete="url" 
                        autofocus>

                    @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- File upload --}}
                <div class="row">
                    <label for="image" class="col-form-label text-md-right">{{ __('Profile Picture') }}</label>

                    <input id="image" 
                        type="file" 
                        class="form-control-file @error('image') is-invalid @enderror" 
                        name="image">

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- Upload Image --}}
                <div class="row pt-3">
                    <button type="submit" class="btn btn-primary pt-1 pb-1 pl-4 pr-4">
                        {{ __('Edit profile') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection