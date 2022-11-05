<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LevantarTicket;

class LevantarTicketController extends Controller
{
    public function index(){
        return view('capturista.capturaticket');
    }

    public function store(Request $request)
    {
        $tickets = new LevantarTicket();
        $tickets->nombre_solicitante = $request->get('nombre_usuario');
        $tickets->area = $request->get('area');
        $tickets->dirigido = $request->get('dirigido');
        $tickets->problema = $request->get('problema');
        $tickets->extension = $request->get('extension');
        $tickets->d_solicitud = $request->get('nombre_usuario');

        $tickets->save();

        return redirect('/capturista');
    }

}
