@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Redirección</h1>
@stop

@section('content')
    <p>(Al agregarse los roles se redirigirá a la pantalla principal del usuario)</p>
    <p></p>
    <a class="btn btn-primary" href="registrar" role="button">CRUD usuarios</a>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop