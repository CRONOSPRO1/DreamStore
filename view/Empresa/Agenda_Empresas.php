<?php require_once'../layout/Empresa.php'; ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h4 class="h2">Agenda_Empresas</h4>

    </div>


    <div class="col-xs-12">
		<h4>Agenda</h4>
		<div>
        <a href="Editar_Proveedores.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar Proveedor</a>
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
					<td><?php echo 'Carlos Maldonado' ?></td>
					<td><?php echo '3123253454' ?></td>
					<td><?php echo 'Cr 34 # 12' ?></td>
					<td><?php echo 'carlos@gmail.com' ?></td>
					<td><a class="btn btn-warning" href=""><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a></td>
                    
                </tr>
                
                <tr>
                
                    <td><?php echo 'Samanta Newton' ?></td>
					<td><?php echo '3131435578' ?></td>
					<td><?php echo 'Cr 12 # 45 A' ?></td>
					<td><?php echo 'samantan@gmail.com' ?></td>
					<td><a class="btn btn-warning" href=""><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a></td>
                
                
                
                </tr>
                
                <tr>
                
                    <td><?php echo 'Antonio Marquez' ?></td>
                    <td><?php echo '322457576' ?></td>
                    <td><?php echo 'Cr 23 # 56 C' ?></td>
                    <td><?php echo 'antonio2@gmail.com' ?></td>
                    <td><a class="btn btn-warning" href=""><i class="fa fa-edit"></i></a></td>
                    <td><a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a></td>
                
            
            
                </tr>
                
                <tr>
                
                    <td><?php echo 'Rafael Manrrique' ?></td>
                    <td><?php echo '312475658' ?></td>
                    <td><?php echo 'Cr 21 # 67 B' ?></td>
                    <td><?php echo 'rafa234@gmail.com' ?></td>
                    <td><a class="btn btn-warning" href=""><i class="fa fa-edit"></i></a></td>
                    <td><a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a></td>
                
            
            
                </tr>

			</tbody>
		</table>
	</div>

    

    <?php require_once '../layout/footer.php'; ?>