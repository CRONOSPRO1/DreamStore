<?php require_once'../layout/Empresa.php'; ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h4 class="h2">Reportes</h4>
        
    </div>

    <div class="container">
            <h1></h1>
            <div class="row">
                <div class="col-lg-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form class="form-horizontal" action="." method="POST">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Reportes</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="fecha" id="fecha">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Clasificacion Reporte</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="dni" id="dni">
                                    </div>
                                </div>
                                <div class="form-group">

                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label"></label>
                                    <div class="col-sm-8">
                                    <a href="#" class="btn btn-info add-new"><i class="fa fa-plus"></i> Buscar</a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>


                </div>
            </div>
            <div class="row">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Ventas</th>
                                    <th>Articulo Mas Vendido</th>
                                    <th>Mes</th>
                                    <th>Proveedor</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            
                                    <tr>

                                        <td><?php echo '' ?></td>
                                        <td><?php echo '' ?></td>
                                        <td><?php echo '' ?></td>
                                        <td><?php echo '' ?></td>
                                    </tr>
                                
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
    </div>
    

    <?php require_once '../layout/footer.php'; ?>