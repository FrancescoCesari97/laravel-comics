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
                    <img class="img-fluid comic-cover" src="{{$comic['thumb']}}" alt="">

                    <h3>{{$comic['series']}}</h3>
                </div>
            </div>
            @endforeach

        </div>
    </div>

</main>
@endsection