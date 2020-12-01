<?php require_once'../layout/Empresa.php'; ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h4 class="h2">Productos Empresa</h4>

    </div>

    <div class="col-xs-12">
		<h4>Productos</h4>
		<div>
			<a class="btn btn-success" href="Productos_Empresa.php">Nuevo <i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Código</th>
					<th>Descripción</th>
					<th>Precio de compra</th>
					<th>Precio de venta</th>
					<th>Existencia</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo '1234566' ?></td>
					<td><?php echo '1' ?></td>
					<td><?php echo 'Producto envasado y muy delicado vasija de porselana' ?></td>
					<td><?php echo '4.000.000' ?></td>
					<td><?php echo '150.000' ?></td>
					<td><?php echo 'Producto agotado' ?></td>
					<td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $producto->id?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $producto->id?>"><i class="fa fa-trash"></i></a></td>
                    
                </tr>
                
                <tr>
                
                    <td><?php echo '1211231' ?></td>
					<td><?php echo '2' ?></td>
					<td><?php echo 'Producto de envases plasticos' ?></td>
					<td><?php echo '2.000.000' ?></td>
					<td><?php echo '90.000' ?></td>
					<td><?php echo 'Producto Disponibles' ?></td>
					<td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $producto->id?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $producto->id?>"><i class="fa fa-trash"></i></a></td>
                
                
                
                </tr>
                
                <tr>
                
                    <td><?php echo '232453' ?></td>
                    <td><?php echo '2' ?></td>
                    <td><?php echo 'Producto de Carteras importadas' ?></td>
                    <td><?php echo '3.000.000' ?></td>
                    <td><?php echo '145.000' ?></td>
                    <td><?php echo 'Producto Disponibles' ?></td>
                    <td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $producto->id?>"><i class="fa fa-edit"></i></a></td>
                    <td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $producto->id?>"><i class="fa fa-trash"></i></a></td>
                
            
            
                </tr>
                
                <tr>
                
                    <td><?php echo '8687665' ?></td>
                    <td><?php echo '2' ?></td>
                    <td><?php echo 'Articulos de uso personal' ?></td>
                    <td><?php echo '6.000.000' ?></td>
                    <td><?php echo '60.000' ?></td>
                    <td><?php echo 'Producto Disponibles' ?></td>
                    <td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $producto->id?>"><i class="fa fa-edit"></i></a></td>
                    <td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $producto->id?>"><i class="fa fa-trash"></i></a></td>
                
            
            
                </tr>

			</tbody>
		</table>
	</div>

    

    <?php require_once '../layout/footer.php'; ?>