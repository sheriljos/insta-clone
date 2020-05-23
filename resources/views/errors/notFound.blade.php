@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <h1 class="cursive pb-2">We don't know your {{ $userName }}</h1>
            <img src="/images/notFound.jpg" alt="not found" width="700px" height="400px">
        </div>
    </div>
@endsection