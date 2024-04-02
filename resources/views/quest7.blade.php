@extends('layout')
@section('content')
<div class="jumbotron">
    <div class="row">
        <strong>Pergunta 1: </strong>
        <form method="post" action="{{route('pagQuest7')}}">
            @csrf
            <label for="quest"><strong><h3>Por que Alien X é tão forte?</h3></strong></label>
            <br>
            <img src="{{asset('storage/image/quest7.jpg')}}" alt="ben 10">
            <div class="form-group">
                <input type="radio" name="quest" class="form-control" id="quest" value="A">
                <label for="quest">Conversa com máscaras gigantes, que controlam a realidade</label>
            </div>
            <div class="form-group">
                <input type="radio" name="quest" class="form-control" id="quest" value="B">
                <label for="quest">Faz explosões nucleares com as palmas, normalmente</label>
            </div>
            <div class="form-group">
                <input type="radio" name="quest" class="form-control" id="quest" value="C">
                <label for="quest">Apesar de fraco, é imortal</label>
            </div>
            <div class="form-group">
                <input type="radio" name="quest" class="form-control" id="quest" value="D">
                <label for="quest">Dá felicidade por onde passa</label>
            </div>
            <button type ="submit" class ="btn btn-success"> Próxima </button >
            <button onclick=" window.location.href = '/';" type ="button" class ="btn btn-danger"> Desistir </ button >
        </form>
    </div>
</div>
@endsection