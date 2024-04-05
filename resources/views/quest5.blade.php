@extends('layout')
@section('content')
<div class="py-5">
    <div>
        <strong>Pergunta 1: </strong>
        <form method="post" action="{{route('pagQuest6')}}">
            @csrf
            <label for="quest"><strong><h3>Qual desses aliens não aparecem no Ben 10 clássico?</h3></strong></label>
            <br>
            <img src="{{asset('storage/image/quest5.jpg')}}" alt="ben 10">
            <div class="form-group py-4">
                <div class="form-check">
                    <input type="radio" name="quest" class="form-control" id="quest" value="A">
                    <label for="quest">Acelarado</label>
                </div>
                <div class="form-check py-3">
                    <input type="radio" name="quest" class="form-control" id="quest" value="B">
                    <label for="quest">Gigante</label>
                </div>
                <div class="form-group">
                    <input type="radio" name="quest" class="form-control" id="quest" value="C">
                    <label for="quest">Igana Ártica</label>
                </div>
                <div class="form-group">
                    <input type="radio" name="quest" class="form-control" id="quest" value="D">
                    <label for="quest">Chama</label>
                </div>
                </div>
            <button type ="submit" class ="btn btn-success"> Próxima </button >
            <button onclick=" window.location.href = '/';" type ="button" class ="btn btn-danger"> Desistir </ button >
        </form>
    </div>
</div>
@endsection