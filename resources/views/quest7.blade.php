@extends('layout')
@section('content')
<div class="py-5">
    <div>
        <h2><strong>Pergunta 7</strong></h2>
        <form method="post" action="{{route('pagQuest8')}}">
            @csrf
            <label for="quest"><strong><h3>Por que Alien X é tão forte?</h3></strong></label>
            <br>
            <img src="{{asset('storage/image/quest7.jpeg')}}" alt="ben 10">
            <div class="form-group py-4">
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="A">
                    <label class="form-check-label" for="quest"><h5>Conversa com máscaras gigantes, que controlam a realidade</h5></label>
                </div>
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="B">
                    <label class="form-check-label" for="quest"><h5>Faz explosões nucleares com as palmas, normalmente</h5></label>
                </div>
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="C">
                    <label class="form-check-label" for="quest"><h5>Apesar de fraco, é imortal</h5></label>
                </div>
                <div class="form-chack py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="D">
                    <label class="form-check-label" for="quest"><h5>Dá felicidade por onde passa</h5></label>
                </div>
            </div>
            <button type ="submit" class ="btn btn-success"> Próxima </button >
            <button onclick=" window.location.href = '/';" type ="button" class ="btn btn-danger"> Desistir </button>
        </form>
    </div>
</div>
@endsection