<?php namespace App\Controllers;

class Login extends BaseController{

    public function index(){
        $data['titulo']="Moe";
        return view ('Login/index',$data);
    }

    public function estagiario(){
        $data['titulo']="Incrição";
        return view('Login/Inscricao_estagiario',$data);
    }
    public function empresa(){
        $data['titulo']="Incrição";
        return view('Login/Inscricao_empresa',$data);
    }

}