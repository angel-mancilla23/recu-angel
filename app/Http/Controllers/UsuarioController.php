<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function mostrarLogin(){



        return view('login');
        }
}
