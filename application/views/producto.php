<!DOCTYPE html>
<html>
	<head>
		<title>Productos navideños</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body background="<?php echo base_url('img/navi.jpg'); ?>">
		<div class="container">
		<br>
		<br>

			<div class="panel panel-info">
				<div class="panel-heading text-center">
					<h4 class="panel-title">Nuevo producto</h4>
				</div>	
				<div class="panel-body">
					<div class="row">
				<div class="col col-sm-4">
				</div>
				<div class="col col-sm-4 text-center">
					<form method="post" action="<?php echo base_url('productos/guardarProducto'); ?>">
						<input value="<?php echo (isset($pr->id)?$pr->id:''); ?>" type="hidden" name="id">
						<div class="input-group form-group">
							<label class="input-group-addon" for="nombre">Nombre</label>
							<input value="<?php echo (isset($pr->nombre)?$pr->nombre:''); ?>" type="text" name="nombre" class="form-control" id="nombre">
						</div>
						<div class="input-group form-group">
							<label class="input-group-addon" for="descripcion">Descripcion</label>
							<input value="<?php echo (isset($pr->descripcion)?$pr->descripcion:''); ?>"  type="text" name="descripcion" class="form-control" id="descripcion">
						</div>
						<div class="input-group form-group">
							<label class="input-group-addon" for="precio">Precio</label>
							<input value="<?php echo (isset($pr->precio)?$pr->precio:''); ?>"  type="number" name="precio" class="form-control" id="precio">
						</div>
						<button class="btn btn-success">Guardar</button>
					</form>
				</div>
				<div class="col col-sm-4">
				</div>
			</div>
			<br>
			<br>

			<div class="row">
				<table class="table table-hover">
					<thead>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Precio</th>
						<th>--</th>
					</thead>
					<tbody>
						<?php

							foreach ($productos as $producto) {
								$editLink = base_url("productos/edit?id={$producto->id}");
								$delLink = base_url("productos/del?id={$producto->id}");

								echo "<tr>
									<td>{$producto->nombre}</td>
									<td>{$producto->descripcion}</td>
									<td>{$producto->precio}</td>
									<td><a href='{$delLink}' class='btn btn-danger btn-sm'>Eliminar</a>
									<td><a href='{$editLink}' class='btn btn-warning btn-sm'>Editar</a>
									</tr>";
							}

						?>
						
					</tbody>
				</table>
			</div>
				</div>
			</div>
		</div>
	</body>
</html>