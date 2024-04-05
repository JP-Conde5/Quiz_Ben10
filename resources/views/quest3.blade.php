@extends('layout')
@section('content')
<div class="py-5">
    <div>
        <h2><strong>Pergunta 3</strong></h2>
        <form method="post" action="{{route('pagQuest4')}}">
            @csrf
            <label for="quest"><strong><h3>Qual é o primeiro conflito do "Ben 10: Supremacia Alienígena"?</h3></strong></label>
            <br>
            <img src="{{asset('storage/image/quest3.jpeg')}}" alt="ben 10">
            <div class="form-group py-4">
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="A">
                    <label class="form-check-label" for="quest"><h5>Vilgax constroi seu próprio Omnitrix e vem a Terra se vingar de Ben</h5></label>
                </div>
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="B">
                    <label class="form-check-label" for="quest"><h5>As pessoas descobrem quem é, de fato, o Ben 10</h5></label>
                </div>
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="C">
                    <label class="form-check-label" for="quest"><h5>Kevin 11 descobre como controlar seus poderes e, percebendo todo o preconceito sofrido na sua vida, tenta se vingar da sociedade</h5></label>
                </div>
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="D">
                    <label class="form-check-label" for="quest"><h5>Ben descobre o vazio de ser, ao mesmo tempo, vários seres, busca tirar o relógio de seu pulso e tentar viver uma vida normal</h5></label>
                </div>
            </div>
            <button type ="submit" class ="btn btn-success"> Próxima </button >
            <button onclick=" window.location.href = '/';" type ="button" class ="btn btn-danger"> Desistir </button >
        </form>
    </div>
</div>
@endsection