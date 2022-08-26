<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">">
    <title>FILMS</title>
</head>
<body>
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
</body>
</html>