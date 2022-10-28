<?php 

	$conexion=mysqli_connect('localhost','root','','sistemaTickets');

 ?>
@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <h1>Registrar Usuarios</h1>
@stop

@section('content')
    <p>CRUD Usuarios</p>
    
    <br>

	<table border="1" >
		<tr>
            <td>id</td>
			<td>nombre</td>
			<td>correo</td>
		</tr>

		<?php 
		$sql="SELECT * from users";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			
            <td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['name'] ?></td>
			<td><?php echo $mostrar['email'] ?></td>
	
		</tr>
	<?php 
	}
	 ?>
	</table>

    <p></p>
    <a class="btn btn-primary" href="add_user" role="button">Agregar Usuario</a>
    <button type="button" class="btn btn-success">Editar Usuario</button>
    <button type="button" class="btn btn-danger">Eliminar Usuarios</button>

    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop