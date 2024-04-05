@extends('layout')
@section('content')
<div class="py-5">
    <div>
        <h2><strong>Pergunta 8</strong></h2>
        <form method="post" action="{{route('pagResultado')}}">
            @csrf
            <label for="quest"><strong><h3>Se o Eco Eco cantasse "DENTRO DA HILUX", como ficaria?</h3></strong></label>
            <br>
            <img src="{{asset('storage/image/quest8.jpeg')}}" alt="ben 10">
            <div class="form-group py-4">    
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="A">
                    <label class="form-check-label" for="quest"><h5>Inside of the Hilux</h5></label>
                </div>
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="B">
                    <label class="form-check-label" for="quest"><h5>Não há Hilux, não escuto o bits do tuts tuts, o vidro já não embaça</h5></label>
                </div>
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="C">
                    <label class="form-check-label" for="quest"><h5>Dentro dentro dentro da da da Hilux Hilux Hilux</h5></label>
                </div>
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="D">
                    <label class="form-check-label" for="quest"><h5>No interior do ambiente Hiluxiano, em meus ouvidos chegam a sonoridade do ritmo, expressa na onomatopeia "tuts, tuts!"</h5></label>
                </div>
            </div>
            <button type ="submit" class ="btn btn-success"> Próxima </button >
            <button onclick=" window.location.href = '/';" type ="button" class ="btn btn-danger"> Desistir </button >
        </form>
    </div>
</div>
@endsection