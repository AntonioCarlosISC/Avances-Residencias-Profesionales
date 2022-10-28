@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <h1>Agregar Nuevo Usuario</h1>
@stop

@section('content')
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Ingrese nombre completo</label>
    <input type="string" class="form-control" id="exampleFormControlInput1" >
  </div>
  
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Ingrese nombre de usuario</label>
    <input type="string" class="form-control" id="exampleFormControlInput1">
  </div>
  
  <div>
  <label for="exampleInputEmail1" class="form-label">Tipo de Usuario</label>
  <select class="form-select" aria-label="Default select example">
    <option selected>Seleccionar</option>
    <option value="administrador">Administrador</option>
    <option value="capturista">Capturista</option>
    <option value="tecnico">Técnico</option>
    <option value="programador">Programador</option>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="psswd">
    
        <label for="exampleInputPassword1" class="form-label">Confirmar contraseña</label>
        <input type="password" class="form-control" id="psswd2">
    </div>

  </select>
  </div>
  <p></p>
  
  <a class="btn btn-outline-success" href="#" role="button">Agregar Usuario</a>
  <a class="btn btn-outline-danger" href="registrar" role="button">Cancelar</button></a>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop