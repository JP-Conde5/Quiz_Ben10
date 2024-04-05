@extends('layout')
@section('content')
<div class="py-5">
    <div>
        <h2><strong>Pergunta 6</strong></h2>
        <form method="post" action="{{route('pagQuest7')}}">
            @csrf
            <label for="quest"><strong><h3>Qual não é um poder do LobisBen?</h3></strong></label>
            <br>
            <img src="{{asset('storage/image/quest6.jpeg')}}" alt="ben 10">
            <div class="form-group py-4">
                <div class="form-chack py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="A">
                    <label class="form-check-label" for="quest"><h5>"Maybe you think that you can hide / I can smell your scent for miles / Just like animals / Animals"</h5></label>
                </div>
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="B">
                    <label class="form-check-label" for="quest"><h5>Transformar o dia em noite</h5></label>
                </div>
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="C">
                    <label class="form-check-label" for="quest"><h5>Grito forte</h5></label>
                </div>
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="D">
                    <label class="form-check-label" for="quest"><h5>Características de lobo</h5></label>
                </div>
            </div>           
            <button type ="submit" class ="btn btn-success"> Próxima </button >
            <button onclick=" window.location.href = '/';" type ="button" class ="btn btn-danger"> Desistir </button >
        </form>
    </div>
</div>
@endsection