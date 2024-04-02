@extends('layout')
@section('content')
    <div class="jumbotron">
        <div class="row">
            <div class="col-6 py-4">
                <img src="{{asset('storage/image/ben10.jpg')}}" style='width:30rem' alt="Super Ben-10">
            </div>
            <div class="col-6">
                <p class="h3 text-center py-4">Quiz do Ben 10</p>
                <br>
                <p>Ben 10 é uma franquia de mídia de desenhos animados norte-americana e é produzida pelo Cartoon Network Studios. A franquia fala sobre um garoto que usa um dispositivo extraterrestre em formato de relógio de pulso, que a cada série é renovado ou trocado.</p>
                <br>
                <a href="{{route('pagQuest1')}}" class="btn btn-success">Começar o quiz</a>
            </div>
        </div>
    </div>
@endsection