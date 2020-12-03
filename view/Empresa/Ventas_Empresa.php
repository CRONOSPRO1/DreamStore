<?php require_once 'view/layout/empresa.php'; ?>
<main role="main" class="col-md-9 ml-sm-auto  col-lg-10 px-md-4">
    <div class="d-flex justify-content-between mr-1 flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-1 border-bottom">
        <h2 class="h2">Ventas</h2>
        
    </div>


    <div class="table-responsive ">
        <table class="table table-striped table-sm text-center aling-middle">
            <thead>
                <tr>
                    <td colspan="6" class="text-info h5">Listado de compras</td>
                </tr>
            </thead>
            <thead class="bg-dark text-white h6">
                <tr>
                    <th>Id_compra</th>
                    <th>Comprador</th>
                    <th>Fecha</th>
                    <th>Producto</th>
                    <th>Vista previa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->model_miscompras->listar_compras_usuario(2) as $row) : ?>
                    <tr>
                        <td><?= $row['id_compra'] ?></td>
                        <td><?= $row['nombre'] ?></td>
                        <td><?= $row['fecha_venta'] ?></td>
                        <td><?= $row['nombre_producto'] ?></td>
                        <td><a class="btn btn-primary " href="javascript:void(0)" onclick="mostrarDetalles_compras(
                        '<?= $row['id_compra'] ?>',
                        '<?= $row['fecha_venta'] ?>',
                        '<?= $row['nombre_producto'] ?>',
                        '<?= $row['precio'] ?>',
                        '<?php foreach ($this->model_usuario->nombre_vendedor($row['id_vendedor']) as $resultado) {
                                echo $resultado['resultado'];
                            } ?>',
                         '<?php foreach ($this->model_usuario->nombre_vendedor($row['id_comprador']) as $resultado) {
                                echo $resultado['resultado'];
                            } ?>',
                            '<?= $row['direccion'] ?>',
                            '<?= base_url . $row['imagen1'] ?>',
                            '<?= $row['id_compra'] ?>',
                            '<?= $row['id_comprador'] ?>'
                    )"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
                                    <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                </svg></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
        
    <?php require_once 'view/layout/footer.php'; ?>