@extends('layout.app') @section('title') Comics @endsection
@section('main-content')
<main class="main-comics">
    <div class="container text-center">
        <h1 class="text-light py-3">Comic detail:{{ $comic["title"] }}</h1>
    </div>
    <div class="container py-3 text-center">
        <div class="text-light">
            <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="" />

            <h3 class="fs-6 py-3">
                {{ strtoupper($comic["series"]) }}
            </h3>
            <div class="fs-6 py-3">
                <p>
                    {{ $comic["description"] }}
                </p>
            </div>
        </div>
    </div>
</main>
@endsection
