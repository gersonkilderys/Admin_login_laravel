<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(){
        $data['titulo'] = "login";
        return view('login',$data);
    }
}
