@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agregar Usuario</h1>
    <p></p>
@stop

@section('content')
    <form action="/usuarios" method="POST">
        
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre del Usuario</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Usuario</label>
            <input id="usuario" name="usuario" type="text" class="form-control" tabindex="2">
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
            <input type="password" id="password" name="password" type="text" class="form-control" tabindex="4">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Confirmar contraseña</label>
            <input type="password" id="cpassword" name="cpassword" type="text" class="form-control" tabindex="5">
        </div>
        <a href="/usuarios" class="btn btn-danger" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-success" tabindex="4">Agregar Usuario</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop