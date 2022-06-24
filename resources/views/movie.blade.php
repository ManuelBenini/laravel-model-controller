@extends('layouts.main')

@section('title', 'Film')

@section('content')

    <h2>Tutti i film</h2>

    <div class="film-cards">

        @foreach ($films as $film)
    
            <div class="card mb-card" style="width: 18rem;">
        
                <div class="card-body mb-card-body">
                    <h5 class="card-title">{{$film->title}}</h5>
                </div>
        
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Titolo originale: {{$film->original_title}}</li>
                    <li class="list-group-item">Nazionalit&agrave;: {{$film->nationality}}</li>
                    <li class="list-group-item">Data di uscita: {{$film->date}}</li>
                    <li class="list-group-item">Voto della critica: {{$film->vote}}</li>
                </ul>
            </div>
            
        @endforeach

    </div>

@endsection