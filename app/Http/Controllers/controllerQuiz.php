<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerQuiz extends Controller
{
    private $gabarito = array();

    public function __construct(){
        $this->gabarito['ques1'] = 'D';
        $this->gabarito['ques2'] = 'C';
        $this->gabarito['quest3'] = 'B';
        $this->gabarito['quest4'] = 'D';
        $this->gabarito['quest5'] = 'A';
        $this->gabarito['quest6'] = 'B';
        $this->gabarito['quest7'] = 'A';
        $this->gabarito['quest8'] = 'C';
    }

    public function index(){
        session(['acertos' => 0]);
        return view('quest1');
    }

    public function dadosQuest1(Request $resquet){
        $resposta = $request->input('quest');
        session(['resposta1' => $resposta]);
        if(strcmp($resposta, $this->gabarito['quest1'])){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['status1' => 'Acertou']);
        }else{
            session(['status1' => 'Errou']);
        }
        return view('quest2');
    }

    public function dadosQuest2(Request $resquet){
        $resposta = $request->input('quest');
        session(['resposta2' => $resposta]);
        if(strcmp($resposta, $this->gabarito['quest2'])){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['status2' => 'Acertou']);
        }else{
            session(['status2' => 'Errou']);
        }
        return view('quest3');
    }

    public function dadosQuest3(Request $resquet){
        $resposta = $request->input('quest');
        session(['resposta3' => $resposta]);
        if(strcmp($resposta, $this->gabarito['quest3'])){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['status3' => 'Acertou']);
        }else{
            session(['status3' => 'Errou']);
        }
        return view('quest4');
    }

    public function dadosQuest4(Request $resquet){
        $resposta = $request->input('quest');
        session(['resposta4' => $resposta]);
        if(strcmp($resposta, $this->gabarito['quest4'])){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['status4' => 'Acertou']);
        }else{
            session(['status4' => 'Errou']);
        }
        return view('quest5');
    }

    public function dadosQuest5(Request $resquet){
        $resposta = $request->input('quest');
        session(['resposta5' => $resposta]);
        if(strcmp($resposta, $this->gabarito['quest5'])){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['status5' => 'Acertou']);
        }else{
            session(['status5' => 'Errou']);
        }
        return view('quest6');
    }

    public function dadosQuest6(Request $resquet){
        $resposta = $request->input('quest');
        session(['resposta6' => $resposta]);
        if(strcmp($resposta, $this->gabarito['quest6'])){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['status6' => 'Acertou']);
        }else{
            session(['status6' => 'Errou']);
        }
        return view('quest7');
    }

    public function dadosQuest7(Request $resquet){
        $resposta = $request->input('quest');
        session(['resposta7' => $resposta]);
        if(strcmp($resposta, $this->gabarito['quest7'])){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['status7' => 'Acertou']);
        }else{
            session(['status7' => 'Errou']);
        }
        return view('quest8');
    }

    public function dadosQuest8(Request $resquet){
        $resposta = $request->input('quest');
        session(['resposta8' => $resposta]);
        if(strcmp($resposta, $this->gabarito['quest8'])){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['status8' => 'Acertou']);
        }else{
            session(['status8' => 'Errou']);
        }
        
        $dados = array();
        for($i = 0; $i < 8; $i++){
            $dados[$i]['resposta'] = session('resposta'.($i+1));
            $dados[$i]['status'] = session('status'.($i+1));
        }

        $acertos = session('acertos');

        if($acertos == 8){
            $dados['mensagem'] = "Você é 10!";
        }else if($acertos > 4){
            $dados['mensagem'] = "Você é um bom fã de Ben 10";
        }else if($acertos > 0){
            $dados['mensagem'] = "Pesquisa mais, é a melhor criação da humanidade";
        }else{
            $dados['mensagem'] = "Você teve infância?";
        }

        return view('resultado', compact('dados'));
    }
}
?>