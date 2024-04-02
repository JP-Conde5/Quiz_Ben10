@extends('layout')
@section('content')
<div class="jumbotron">
    <div class="row">
        <strong>Pergunta 1: </strong>
        <form method="post" action="{{route('pagQuest1')}}">
            @csrf
            <label for="quest"><strong><h3>Qual é o verdadeiro nome do Ben 10?</h3></strong></label>
            <br>
            <img src="{{asset('storage/image/quest1.jpeg')}}" alt="ben 10">
            <div class="form-group">
                <input type="radio" name="quest" class="form-control" id="quest" value="A">
                <label for="quest">Benjamin Constante</label>
            </div>
            <div class="form-group">
                <input type="radio" name="quest" class="form-control" id="quest" value="B">
                <label for="quest">Benjamin Ten</label>
            </div>
            <div class="form-group">
                <input type="radio" name="quest" class="form-control" id="quest" value="C">
                <label for="quest">Benjamin Franklin</label>
            </div>
            <div class="form-group">
                <input type="radio" name="quest" class="form-control" id="quest" value="D">
                <label for="quest">Benjamin Tennyson</label>
            </div>
            <button type ="submit" class ="btn btn-success"> Próxima </button >
            <button onclick=" window.location.href = '/';" type ="button" class ="btn btn-danger"> Desistir </ button >
        </form>
    </div>
</div>
@endsection