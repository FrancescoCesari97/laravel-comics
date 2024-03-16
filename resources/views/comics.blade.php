@extends('layout.app')

@section('title')
Comics
@endsection
@section('main-content')
<main class="main-comics">
    <div class="container">
        <span class="titolo">CURRENT SERIES</span>
    </div>
    <div class="container">
        <div class="row">
            @foreach($comics as $comic)
            <div class="col-2">
                <div class="card">
                    <img src="$comic.thumb" alt="">
                </div>
            </div>
            @endforeach

        </div>
    </div>

</main>
@endsection