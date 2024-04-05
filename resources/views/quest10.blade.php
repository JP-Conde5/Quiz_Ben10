@extends('layout')
@section('content')
<div class="py-5">
    <div>
        <h2><strong>Pergunta 8</strong></h2>
        <form method="post" action="{{route('pagResultado')}}">
            @csrf
            <label for="quest"><strong><h3>Qual que é o alien mais gay do Ben 10?</h3></strong></label>
            <br>
            <img src="{{asset('storage/image/quest8.jpeg')}}" alt="ben 10">
            <div class="form-group py-4">    
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="A">
                    <label class="form-check-label" for="quest"><h5>Qualquer um do reboot</h5></label>
                </div>
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="B">
                    <label class="form-check-label" for="quest"><h5>Enormossauro Supremo, ser bombado não impede nada</h5></label>
                </div>
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="C">
                    <label class="form-check-label" for="quest"><h5>Ameaça Aquática, o nome está no feminino</h5></label>
                </div>
                <div class="form-check py-3">
                    <input class="form-check-input" type="radio" name="quest" class="form-control" id="quest" value="D">
                    <label class="form-check-label" for="quest"><h5>Pesky Dust, fadinha</h5></label>
                </div>
            </div>
            <button type ="submit" class ="btn btn-success"> Próxima </button >
            <button onclick=" window.location.href = '/';" type ="button" class ="btn btn-danger"> Desistir </button >
        </form>
    </div>
</div>
@endsection