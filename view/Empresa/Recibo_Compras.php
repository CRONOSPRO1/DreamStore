<?php require_once'../layout/Empresa.php'; ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h4 class="h2">Recibo Compras</h4>
        
    </div>

    <div class="col-xs-12">
		<h4>Recibo</h4>
		<div>
        <a href="#" class="btn btn-info add-new"><i class="fa fa-plus"></i> Generar Recibo</a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Producto</th>
                    <th>Fecha Envio</th>
                    <th>Fecha Llegada</th>
                    <th>Costo Envio</th>
                    <th>Costo producto</th>
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
                    <td><?php echo '<img src="http://localhost/DreamStore/assets/imagenes/6.png" alt="Firma" width="240" height="40>' ?></td>
                </tr>
                <tr>

                

			</tbody>
		</table>
	</div>

    <?php require_once '../layout/footer.php'; ?>