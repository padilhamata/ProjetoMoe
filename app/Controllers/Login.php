<?php namespace App\Controllers;

class Login extends BaseController{

    public function index(){
        $data['titulo']="Moe";
        return view ('Login/index',$data);
    }

    public function inscricao(){
        return view('Login/Inscricao');
    }
}