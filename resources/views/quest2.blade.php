@extends('layout')
@section('content')
<div class="py-5">
    <div>
        <h2><strong>Pergunta 2</strong></h2>
        <form method="post" action="{{route('pagQuest3')}}">
            @csrf
            <label for="quest"><strong><h3>Qual é o maior vilão da saga do Ben 10?</h3></strong></label>
            <br>
            <img src="{{asset('storage/image/quest2.jpg')}}" alt="ben 10">
            <div class="form-group py-4">
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="A">
                    <label class="form-check-label" for="quest"><h5>Doutor Animal</h5></label>
                </div>
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="B">
                    <label class="form-check-label" for="quest"><h5>Gwen Tennyson</h5></label>
                </div>
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="C">
                    <label class="form-check-label" for="quest"><h5>Vilgax</h5></label>
                </div>
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="D">
                    <label class="form-check-label" for="quest"><h5>Fantasmático</h5></label>
                </div>
            </div>
            <button type ="submit" class ="btn btn-success"> Próxima </button >
            <button onclick=" window.location.href = '/';" type ="button" class ="btn btn-danger"> Desistir </button >
        </form>
    </div>
</div>
@endsection