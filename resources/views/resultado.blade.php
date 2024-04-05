@extends('layout')
@section('content')
    <div class="py-5">
        <h2><strong>Resultado</strong></h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Questão</th>
                    <th scope="col">Resposta</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @for($k=0; $k<=7; $k++)
                <tr>
                    <th scope="row">{{$k+1}}</th>
                    <td>{{$dados[$k]['resposta']}}</td>
                    <td>{{$dados[$k]['status']}}</td>
                </tr>
                @endfor
            </tbody>
    </table>
    <div class="row text-center py-4">
        <div class="col-md-12 h4"><strong>{{$dados['mensagem']}}</strong></div>
    </div>
    <div class="row py-4">
        <button onclick=" window.location.href = '/';" type ="button" class ="btn btn-sucessr"> Voltar no início </ button >
    </div>
    </div>
@endsection