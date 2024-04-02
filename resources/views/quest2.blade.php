@extends('layout')
@section('content')
<div class="jumbotron">
    <div class="row">
        <strong>Pergunta 1: </strong>
        <form method="post" action="{{route('pagQuest2')}}">
            @csrf
            <label for="quest"><strong><h3>Qual é o maior vilão da saga do Ben 10?</h3></strong></label>
            <br>
            <img src="{{asset('storage/image/quest2.jpg')}}" alt="ben 10">
            <div class="form-group">
                <input type="radio" name="quest" class="form-control" id="quest" value="A">
                <label for="quest">Doutor Animal</label>
            </div>
            <div class="form-group">
                <input type="radio" name="quest" class="form-control" id="quest" value="B">
                <label for="quest">Gwen Tennyson</label>
            </div>
            <div class="form-group">
                <input type="radio" name="quest" class="form-control" id="quest" value="C">
                <label for="quest">Vilgax</label>
            </div>
            <div class="form-group">
                <input type="radio" name="quest" class="form-control" id="quest" value="D">
                <label for="quest">Fantasmático</label>
            </div>
            <button type ="submit" class ="btn btn-success"> Próxima </button >
            <button onclick=" window.location.href = '/';" type ="button" class ="btn btn-danger"> Desistir </ button >
        </form>
    </div>
</div>
@endsection