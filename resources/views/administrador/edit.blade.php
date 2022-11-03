@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar usuarios</h1>
@stop

@section('content')
    <form action="/usuarios/{{$usuario->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Nombre del Usuario</label>
            <input id="nombre" name="nombre" type="text" class="form-control" value="{{$usuario->name}}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Usuario</label>
            <input id="usuario" name="usuario" type="text" class="form-control" value="{{$usuario->email}}">
        </div>

        <div class="input-group mb-3" tabindex="3">
            <select class="form-select" id="t_user" name="t_user">
              <option selected>Seleccione el tipo de usuario</option>
              <option value="capturista">Capturista</option>
              <option value="tecnico">Técnico</option>
              <option value="programador">Programador</option>
            </select>
            <label class="input-group-text" for="inputGroupSelect02">Tipo de usuario</label>
          </div>

        <div class="mb-3">
            <label for="" class="form-label">Contraseña</label>
            <input type="password" id="password" name="password" type="text" class="form-control" value="{{$usuario->password}}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Confirmar contraseña</label>
            <input id="cpassword" name="cpassword" type="text" class="form-control" tabindex="5">
        </div>
        
        <button type="submit" class="btn btn-success">Actualizar</button>

        <a href="/usuarios" class="btn btn-danger">Cancelar</a>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop