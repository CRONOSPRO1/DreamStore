<?php require_once 'view/layout/Empresa.php'; ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h4 class="h4">Usuarios Registrados</h4>
        <div class="btn-toolbar mb-2 mb-md-0"></div>
    </div>


    <div class="col-xs-12">
		<div>
			<a class="btn btn-info add-new" data-toggle="modal" data-target="#agregar">Agregar <i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nombres</th>
					<th>Teléfono</th>
					<th>Dirección</th>
					<th>E-mail</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo 'Manuel Diaz' ?></td>
					<td><?php echo '3123453454' ?></td>
					<td><?php echo 'Cr 23 # 12' ?></td>
					<td><?php echo 'manu.diaz@gmail.com' ?></td>
					<td><a data-toggle="modal" data-target="#editar" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
                    <td><a data-toggle="modal" data-target="#eliminar" class="btn btn-danger" ><i class="fa fa-trash"></i></a></td>
                
                </tr>
                
                <tr>
                
                    <td><?php echo 'Camila Perez' ?></td>
					<td><?php echo '3132456578' ?></td>
					<td><?php echo 'Cr 43 # 12 A' ?></td>
					<td><?php echo 'Camilap@gmail.com' ?></td>
					<td><a data-toggle="modal" data-target="#editar" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
                    <td><a data-toggle="modal" data-target="#eliminar" class="btn btn-danger" ><i class="fa fa-trash"></i></a></td>
                
                
                
                </tr>
                
                <tr>
                
                    <td><?php echo 'Sara Torres' ?></td>
                    <td><?php echo '3224325654' ?></td>
                    <td><?php echo 'Cr 15 # 34 C' ?></td>
                    <td><?php echo 'sara12@gmail.com' ?></td>
                    <td><a data-toggle="modal" data-target="#editar" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
                    <td><a data-toggle="modal" data-target="#eliminar" class="btn btn-danger" ><i class="fa fa-trash"></i></a></td>
                
            
            
                </tr>
                
                <tr>
                
                    <td><?php echo 'Camilo Gutierrez' ?></td>
                    <td><?php echo '3124235467' ?></td>
                    <td><?php echo 'Cr 8 # 12 A' ?></td>
                    <td><?php echo 'Camilo1234@gmail.com' ?></td>
                    <td><a data-toggle="modal" data-target="#editar" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
                    <td><a  data-toggle="modal" data-target="#eliminar" class="btn btn-danger" ><i class="fa fa-trash"></i></a></td>
                
            
            
                </tr>

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
								<label for="imutname">Nombre</label>
								<input type="Varchar" class="form-control" id="inputname">
							</div>
							<div class="form-group col-md-6">
								<label for="inputtel">Telefono</label>
								<input type="Varchar" class="form-control" id="inputtel">
							</div>
						</div>
						<div class="form-group">
							<label for="inputAddress">Dreccion</label>
							<input type="text" class="form-control" id="inputAddress" placeholder="">
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputemail">Email</label>
								<input type="text" class="form-control" id="inputemail">
							</div>
							<div class="form-group col-md-4">
						</div>

						<button type="button" class="btn btn-primary">Actualizar</button> 
						
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
	<div class="modal fade" id="eliminar" tabindex="-1" aria-labelledby="add" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="add">Editar</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="imutname">Nombre</label>
								<input type="Varchar" class="form-control" id="inputname">
							</div>
							<div class="form-group col-md-6">
								<label for="inputtel">Telefono</label>
								<input type="Varchar" class="form-control" id="inputtel">
							</div>
						</div>
						<div class="form-group">
							<label for="inputAddress">Dreccion</label>
							<input type="text" class="form-control" id="inputAddress" placeholder="">
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputemail">Email</label>
								<input type="text" class="form-control" id="inputemail">
							</div>
							<div class="form-group col-md-4">
						</div>

						<button type="button" class="btn btn-primary">Actualizar</button> 
						
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
    
	<!-- Modal Agregar -->
	<div class="modal fade" id="agregar" tabindex="-1" aria-labelledby="Add" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="Add">Agregar</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputEmail4">Email</label>
								<input type="email" class="form-control" id="inputEmail4">
							</div>
							<div class="form-group col-md-6">
								<label for="inputPassword4">Password</label>
								<input type="password" class="form-control" id="inputPassword4">
							</div>
						</div>
						<div class="form-group">
							<label for="inputAddress">Address</label>
							<input type="text" class="form-control" id="inputAddress" placeholder="">
						</div>
						<div class="form-group">
							<label for="inputAddress2">Address 2</label>
							<input type="text" class="form-control" id="inputAddress2" placeholder="">
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputCity">City</label>
								<input type="text" class="form-control" id="inputCity">
							</div>
							<div class="form-group col-md-4">
								<label for="inputState">State</label>
								<select id="inputState" class="form-control">
									<option selected></option>
									<option>...</option>
								</select>
							</div>
							<div class="form-group col-md-2">
								<label for="inputZip">Zip</label>
								<input type="text" class="form-control" id="inputZip">
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="gridCheck">
								<label class="form-check-label" for="gridCheck">
									Check me out
								</label>
							</div>
						</div>
						<button type="submit" class="btn btn-primary">Sign in</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>

	</div>
    <?php require_once 'view/layout/footer.php'; ?>