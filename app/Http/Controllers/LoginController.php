<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        $tipo_usuario = auth()->user()->t_user;
        if($tipo_usuario == 'capturista'){
           return redirect('capturista');
        }
        
        if($tipo_usuario == 'administrador'){
           return redirect('usuarios');
        }

        if($tipo_usuario == 'tecnico'){
           return redirect('tecnico');
        }
    }
}
