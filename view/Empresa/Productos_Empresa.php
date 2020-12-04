<?php require_once 'view/layout/Empresa.php'; ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h4 class="h4">Productos Empresa</h4>

	</div>

	<div class="col-xs-12">
		<div>
			<a class="btn btn-success" class="btn btn-primary" data-toggle="modal" data-target="#nuevo">Nuevo <i class="fa fa-plus"></i></a>
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
				<?php foreach ($this->model_productos->productos_usuario_mostrar($_SESSION['id_empresa']) as $row) : ?>
					<tr>
						<td><?=$row['id_producto']?></td>
						<td><?=$row['nombre_producto']?></td>
						<td><?=$row['precio']?></td>
						<td><?=$row['estado']?></td>
						<td><?=$row['marca']?></td>
						<td><a data-toggle="modal" data-target="#editar" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
                    	<td><a class="btn btn-danger" href="<?=base_url?>Empresa/eliminar_producto?id=<?=$row['id_producto']?>" ><i class="fa fa-trash"></i></a></td>
                
					</tr>
				<?php endforeach; ?>

			</tbody>
		</table>
	</div>

	<!-- Modal Editar -->
	<div class="modal fade" id="editar" tabindex="-1" aria-labelledby="Edit" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="Edit">Editar <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/></svg></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputid">ID</label>
								<input type="Int" class="form-control" id="inputid">
							</div>
							<div class="form-group col-md-6">
								<label for="inputproducto">Nombre Producto</label>
								<input type="Varchar" class="form-control" id="inputproducto">
							</div>
						</div>
						<div class="form-group col-md-14">
							<label for="inputprecio">Precio</label>
							<input type="text" class="form-control" id="inputprecio" placeholder="">
						</div>
						<div class="form-group cold-md-6">
							<label for="inputmarca">Marca</label>
							<input type="text" class="form-control" id="inputmarca">
						</div>
						<div class="form-row">
							<div class="form-group col-md-8">
								<label for="inputestado">Estado</label>
								<input type="text" class="form-control" id="inputestado">
							</div>
							<div class="form-group col-md-4">
						</div>
						
							
						<button type="submit" class="btn btn-primary">Actualizar</button> 
						
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Eliminar -->
	<div class="modal fade" id="eliminarproductos" tabindex="-1" aria-labelledby="eliminar" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="eliminar">Eliminar</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Hola Mundo</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>

<!-- Button trigger modal -->



	<?php require_once 'view/layout/footer.php'; ?>