<?php require_once 'view/layout/Empresa.php'; ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h4 class="h4">Productos Empresa</h4>

	</div>

	<div class="col-xs-12">
		<div>
			<a class="btn btn-success" href="Productos_Empresa.php">Nuevo <i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre producto</th>
					<th>Precio</th>
					<th>Estado</th>
					<th>Marca</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($this->model_productos->productos_usuario_mostrar($_SESSION['id']) as $row) : ?>
					<tr>
						<td><?=$row['id_producto']?></td>
						<td><?=$row['nombre_producto']?></td>
						<td><?=$row['precio']?></td>
						<td><?=$row['estado']?></td>
						<td><?=$row['marca']?></td>
						<td><a class="btn btn-warning" href=""><i class="fa fa-edit"></i></a></td>
						<td><a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a></td>
					</tr>
				<?php endforeach; ?>

			</tbody>
		</table>
	</div>



	<?php require_once 'view/layout/footer.php'; ?>