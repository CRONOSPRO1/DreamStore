<?php require_once'view/layout/Empresa.php'; ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h4 class="h2">Usuarios</h4>
    
    </div>

    
        
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h3>Añadir <b> Usuario</b></h3></div>
                    
                </div>
            </div>
 
			<div class="row">
				<form method="post">
				<div class="col-md-11">
					<label>Nombres:</label>
					<input type="text" name="nombres" id="nombres" class='form-control' maxlength="100"  >
					<input type="hidden" name="id_cliente" id="id_cliente" class='form-control' maxlength="100"   >
				</div>
				<div class="col-md-11">
                <label>Dirección:</label>
					<input type="text" name="nombres" id="nombres" class='form-control' maxlength="100"  >
					<input type="hidden" name="direccion" id="direccion" class='form-control' maxlength="100"   >
				</div>
				<div class="col-md-11">
					<label>Teléfono:</label>
					<input type="text" name="telefono" id="telefono" class='form-control' maxlength="15" required >
				</div>
				<div class="col-md-11">
					<label>Correo electrónico:</label>
					<input type="email" name="correo_electronico" id="correo_electronico" class='form-control' maxlength="64" required >
				
				</div>
				
				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-success">Guardar</button>
				</div>
				</form>
			</div>
        </div>
    </div> 

    
    <?php require_once 'view/layout/footer.php'; ?>