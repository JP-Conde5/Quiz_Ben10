@extends('layout')
@section('content')
<div class="py-5">
    <div>
        <strong>Pergunta 1: </strong>
        <form method="post" action="{{route('pagQuest7')}}">
            @csrf
            <label for="quest"><strong><h3>Qual não é um poder do LobisBen?</h3></strong></label>
            <br>
            <img src="{{asset('storage/image/quest6.jpeg')}}" alt="ben 10">
            <div class="form-group py-4">
                <div class="form-chack">
                    <input type="radio" name="quest" class="form-control" id="quest" value="A">
                    <label for="quest">"Maybe you think that you can hide / I can smell your scent for miles / Just like animals / Animals"</label>
                </div>
                <div class="form-check py-3">
                    <input type="radio" name="quest" class="form-control" id="quest" value="B">
                    <label for="quest">Transformar o dia em noite</label>
                </div>
                <div class="form-check py3">
                    <input type="radio" name="quest" class="form-control" id="quest" value="C">
                    <label for="quest">Grito forte</label>
                </div>
                <div class="form-check py-3">
                    <input type="radio" name="quest" class="form-control" id="quest" value="D">
                    <label for="quest">Características de lobo</label>
                </div>
            </div>           
            <button type ="submit" class ="btn btn-success"> Próxima </button >
            <button onclick=" window.location.href = '/';" type ="button" class ="btn btn-danger"> Desistir </ button >
        </form>
    </div>
</div>
@endsection