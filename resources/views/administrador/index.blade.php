@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<a href="usuarios/create" class="btn btn-primary">Crear</a>
<p></p>

<table class="table table-dark table-striped at-4">
    <thead>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Usuario</th>
          <th scope="col">Tipo de Usuario</th>
          <th scope="col">Acciones</th>
          
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
            <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->t_user}}</td>
               
                <td>
                   <form action="{{ route ('usuarios.destroy', $usuario->id)}}" method="POST">
                   <a href="/usuarios/{{$usuario->id}}/edit" class="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Eliminar</button>
                    </form>  
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('content')
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop