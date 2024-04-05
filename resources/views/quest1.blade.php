@extends('layout')
@section('content')
<div class="py-5">
    <div>
        <strong>Pergunta 1: </strong>
        <form method="post" action="{{route('pagQuest2')}}">
            @csrf
            <label for="quest"><strong><h3>Qual é o verdadeiro nome do Ben 10?</h3></strong></label>
            <br>
            <img src="{{asset('storage/image/quest1.png')}}" alt="ben 10">
            <div class="form-group py-4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="A">
                    <label class="form-check-label" for="quest">Benjamin Constante</label>
                </div>
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="B">
                    <label class="form-check-label" for="quest">Benjamin Ten</label>
                </div>
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="C">
                    <label class="form-check-label" for="quest">Benjamin Franklin</label>
                </div>
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="D">
                    <label class="form-check-label" for="quest">Benjamin Tennyson</label>
                </div>
            </div>
            <button type ="submit" class ="btn btn-success"> Próxima </button >
            <button onclick=" window.location.href = '/';" type ="button" class ="btn btn-danger"> Desistir </ button >
        </form>
    </div>
</div>
@endsection