<?php require_once'view/layout/Empresa.php'; ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h4 class="h4">Compras</h4>
        
    </div>

    <div class="col-xs-12">
		<div>
		<a class="btn btn-info add-new" data-toggle="modal" data-target="#agregar">Generar</a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Producto</th>
                
                    <th>Destinatario</th>
                    <th>Proveedor</th>
                    <th>Total a Pagar</th>
                    <th>Firma</th>

                </tr>

			</thead>
			<tbody>
				<tr>
					<td><?php echo 'Morral' ?></td>
					<td><?php echo '09/01/2020'?></td>
					<td><?php echo '09/02/2020' ?></td>
					<td><?php echo '15.000' ?></td>
                    <td><?php echo '60.000' ?></td>
                    <td><?php echo 'carlos Diaz / Bogotá' ?></td>
                    <td><?php echo 'Manuel Robles' ?></td>
					<td><?php echo '75.000' ?></td>
                    
                </tr>
                <tr>

                

			</tbody>
		</table>
	</div>

	<!-- Modal Agregar -->
	<div class="modal fade" id="agregar" tabindex="-1" aria-labelledby="Add" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="Add">Generar <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z"/>
						<path fill-rule="evenodd" d="M4.5 10.5A.5.5 0 0 1 5 10h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/></svg></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h6>Su recibo fue generado con exito
					<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-check-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
						<path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
					</svg>
					</h6>
				</div>
				<div class="modal-footer">
					
					<button type="submit" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
				</div>
			</div>
		</div>
	</div>

    <?php require_once 'view/layout/footer.php'; ?>