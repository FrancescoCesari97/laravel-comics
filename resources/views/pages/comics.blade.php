@extends('layout.app')

@section('title')
Comics
@endsection
@section('main-content')
<main class="main-comics">
    <div class="container">
        <span class="titolo">CURRENT SERIES</span>
    </div>
    <div class="container py-5">
        <div class="row">
            @foreach($comics as $index => $comic)
            <div class="col-2 g-4">

                <div class="card card-comics  text-light">
                    <a href="{{ route('comic-detail', [
                        'index' => $index,
                    ]) }}">

                        <img class="img-fluid comic-cover" src="{{$comic['thumb']}}" alt="">
                    </a>

                    <h3 class="fs-6 py-3">{{ strtoupper($comic['series'])}}</h3>
                </div>
            </div>
            @endforeach

        </div>
    </div>

</main>
@endsection