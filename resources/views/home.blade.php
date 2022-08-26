<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">">
    <title>Document</title>
</head>
<body>
    <h1>I 10 film più apprezzati dagli utenti</h1>
    <ul>
        <li>
            {{-- stampo i risultati --}}
            <div class="container">
                @foreach ($movies as $movie)
                    
                @endforeach
            </div>
           
        </li>
    </ul>
</body>
</html>