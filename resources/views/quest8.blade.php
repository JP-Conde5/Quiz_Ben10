@extends('layout')
@section('content')
<div class="jumbotron">
    <div class="row">
        <strong>Pergunta 1: </strong>
        <form method="post" action="{{route('pagQuest8')}}">
            @csrf
            <label for="quest"><strong><h3>Se o Eco Eco cantasse "DENTRO DA HILUX", como ficaria?</h3></strong></label>
            <br>
            <img src="{{asset('storage/image/quest8.jpg')}}" alt="ben 10">
            <div class="form-group">
                <input type="radio" name="quest" class="form-control" id="quest" value="A">
                <label for="quest">Inside of the Hilux</label>
            </div>
            <div class="form-group">
                <input type="radio" name="quest" class="form-control" id="quest" value="B">
                <label for="quest">Não há Hilux, não escuto o bits do tuts tuts, o vidro já não embaça</label>
            </div>
            <div class="form-group">
                <input type="radio" name="quest" class="form-control" id="quest" value="C">
                <label for="quest">Dentro dentro dentro da da da Hilux Hilux Hilux</label>
            </div>
            <div class="form-group">
                <input type="radio" name="quest" class="form-control" id="quest" value="D">
                <label for="quest">No interior do ambiente Hiluxiano, em meus ouvidos chegam a sonoridade do ritmo, expressa na onomatopeia "tuts, tuts!"</label>
            </div>
            <button type ="submit" class ="btn btn-success"> Próxima </button >
            <button onclick=" window.location.href = '/';" type ="button" class ="btn btn-danger"> Desistir </ button >
        </form>
    </div>
</div>
@endsection