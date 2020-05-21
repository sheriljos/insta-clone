@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="POST" enctype="multipart/form-data"  action="{{ route('post.store') }}">
            @csrf
            <div class="col-8 offset-2 pt-3 pl-0">
                {{-- Title  --}}
                <h1 class="cursive">Every picture tell a story</h1>
                {{-- Image Caption --}}
                <div class="row">
                    <label for="caption" class="col-form-label text-md-right">{{ __('Caption') }}</label>

                    <input id="caption" 
                        type="text" 
                        class="form-control @error('caption') is-invalid @enderror" 
                        name="caption" 
                        value="{{ old('caption') }}" 
                        autocomplete="caption" 
                        autofocus>

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                {{-- File upload --}}
                <div class="row">
                    <label for="image" class="col-form-label text-md-right">{{ __('Image') }}</label>

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
                        {{ __('Upload') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection