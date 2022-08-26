@extends('layout.app')

@section('main_content')
<h1>I 10 film più apprezzati dagli utenti</h1>
{{-- stampo i risultati --}}
<div class="container">
    <div class="col flex">
        @foreach ($movies as $movie)
            <div class="card">
                <h4 class="title">Titolo:{{$movie->title}}</h4>
                <div class="original_title">Titolo originale:{{$movie->original_title}}</div>
                <div class="nationality">Nazionalità:{{$movie->nationality}}</div>
                <div class="date">Data di uscita:{{$movie->date}}</div>
                <div class="vote">Voto:{{$movie->vote}}</div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@section('page_title')
    Home
@endsection