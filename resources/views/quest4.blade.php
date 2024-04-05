@extends('layout')
@section('content')
<div class="py-5">
    <div>
        <strong>Pergunta 1: </strong>
        <form method="post" action="{{route('pagQuest5')}}">
            @csrf
            <label for="quest"><strong><h3>No "Ben 10: Omniniverse", qual é o principal parceiro do protagonista?</h3></strong></label>
            <br>
            <img src="{{asset('storage/image/quest4.jpg')}}" alt="ben 10">
            <div class="form-group py-4">
                <div class="form-check">
                    <input type="radio" name="quest" class="form-control" id="quest" value="A">
                    <label for="quest">Gwen Tennyson</label>
                </div>
                <div class="form-check py-3">
                    <input type="radio" name="quest" class="form-control" id="quest" value="B">
                    <label for="quest">Vilgax</label>
                </div>
                <div class="form-check py-3">
                    <input type="radio" name="quest" class="form-control" id="quest" value="C">
                    <label for="quest">Messi, o alienígena</label>
                </div>
                <div class="form-check py-3">
                    <input type="radio" name="quest" class="form-control" id="quest" value="D">
                    <label for="quest">Hulk</label>
                </div>
                </div>
            <button type ="submit" class ="btn btn-success"> Próxima </button >
            <button onclick=" window.location.href = '/';" type ="button" class ="btn btn-danger"> Desistir </ button >
        </form>
    </div>
</div>
@endsection