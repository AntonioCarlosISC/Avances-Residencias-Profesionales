<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        return view('administrador.index')->with('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios = new User();
        $usuarios->name = $request->get('nombre');
        $usuarios->email = $request->get('usuario');
        $usuarios->t_user = $request->get('t_user');
        $usuarios->password = Hash::make($request->get('password'));

        /*if($request->get('t_user') == 'administrador'){
            $user->assingRole('administrador');
        }
        if($request->get('t_user') == 'capturista'){
            $user->assingRole('capturista');
        }
        if($request->get('t_user') == 'tecnico'){
            $user->assingRole('tecnico');
        }
        if($request->get('t_user') == 'programador'){
            $user->assingRole('programador');
        }*/
        
        $usuarios->save();

        return redirect('/usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::find($id);
        return view('administrador.edit')->with('usuario',$usuario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = User::find($id);

        
        $usuario->name = $request->get('nombre');
        $usuario->email = $request->get('usuario');
        $usuario->t_user = $request->get('t_user');
        $usuario->password = Hash::make($request->get('password'));
        
        $usuario->save();

        return redirect('/usuarios');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        return redirect('/usuarios');
    }
}
