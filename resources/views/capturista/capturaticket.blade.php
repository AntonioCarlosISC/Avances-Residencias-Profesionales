@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Capturar Ticket</h1>
@stop

@section('content')
    <form action="capturarticket" class="mb-3" method="POST">

        @csrf
        <label class="form-label">Nombre de usuario</label>
        <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario">

        <label class="form-label">Área</label>
        <input type="text" class="form-control" id="area" name="area">
        <br>

        <label class="form-label">Servicio Requerido</label>
        <select class="form-select" aria-label="Default select example" id="dirigido" name="dirigido">
            <option selected>Seleccionar</option>
            <option value="tecnico">Servicio Técnico</option>
            <option value="programador">Incidencias de software</option>
          </select>
          <br>

        <label class="form-label">Problema</label>
        <textarea class="form-control" id="problema" rows="3" name="problema"></textarea>

        <label class="form-label">Extensión</label>
        <input type="text" class="form-control" id="extension" name="extension">
        <br>

        <label class="form-control">Documeto de solicitud</label>
        <br>

        <button type="submit" class="btn btn-success">Generar Ticket</button>
        <a href="/capturista" class="btn btn-danger">Cancelar</a>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop