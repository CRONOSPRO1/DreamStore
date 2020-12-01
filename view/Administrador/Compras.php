<?php require_once 'view/layout/dashboard.php'; ?>
<main role="main" class="col-md-9 ml-sm-auto  col-lg-10 px-md-4">
    <div class="d-flex justify-content-between mr-1 flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-1 border-bottom">
        <h2 class="h2">Compras</h2>
        
    </div>

    <br>


    <div class="container-sm w-25">

        <table class="table table-sm table-borderless w-100  bg-white shadow">
            <tr class="text-center">
                <td rowspan="2" class="align-middle w-25  bg-success  text-white">
                    <span class="btn bg-success text-white w-100 ">
                        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z" />
                        </svg>
                    </span>
                </td>
                <td><span class="h6">Compras realizadas </span></td>
            </tr>
            <tr class=" border-top   text-center">

                <td class="w-75"><span class="h5  text-success ">
                        <?php foreach ($this->model_miscompras->compras_totales() as $row) {
                            echo $row['resultado'];
                        } ?></span> </td>
            </tr>

        </table>


    </div>






    <canvas class="my-4 w-100" id="GraficoCompras" width="300" height="115"></canvas>

    <hr>







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
                <?php foreach ($this->model_miscompras->listar_compras() as $row) : ?>
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


    <div class="modal" tabindex="-1" id="compras">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Informacion de compra</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="col-md-auto w-100 text-center">
                        <span class="h6">Compra#<span id="id_compra"></span> <br> Fecha <span id="fecha_compra"></span></span>

                        <div class="container-fluid mt-3 text-left">

                            <li class="list-group-item ">
                                <table>
                                    <tr>
                                        <td rowspan="3" class="pr-3">
                                            <span id="imagen">

                                            </span>
                                        </td>
                                        <td><strong>Producto</strong></td>
                                    </tr>
                                    <tr>
                                        <td id="nombre_producto">Audifonos Sony</td>
                                    </tr>
                                    <tr>
                                        <td>$<span class="text-success" id="precio"></span></td>
                                    </tr>
                                </table>
                            </li>

                            <li class="list-group-item">
                                <table>
                                    <tr>
                                        <td rowspan="2" class="pr-3">
                                            <span>
                                                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zm4.854-7.85a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                                </svg>
                                            </span>
                                        </td>
                                        <td><strong>Vendedor</strong></td>
                                    </tr>
                                    <tr>
                                        <td id="nombre_vendedor"></td>

                                    </tr>
                                </table>
                            </li>

                            <li class="list-group-item">
                                <table>
                                    <tr>
                                        <td rowspan="2" class="pr-3">
                                            <span>
                                                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                                </svg>
                                            </span>
                                        </td>
                                        <td><strong>Comprador</strong></td>
                                    </tr>
                                    <tr>
                                        <td id="nombre_comprador"></td>

                                    </tr>
                                </table>
                            </li>
                            <li class="list-group-item">
                                <table>
                                    <tr>
                                        <td rowspan="2" class="pr-3">
                                            <span>
                                                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                                    <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                                </svg>
                                            </span>
                                        </td>
                                        <td><strong>Dirección</strong></td>
                                    </tr>
                                    <tr>
                                        <td id="direccion"></td>

                                    </tr>
                                </table>
                            </li>
                            <form action="<?=url_Administrador?>recibo" method="POST">
                            <input type="hidden" name="id" id="compra">
                            <input type="hidden" name="id_comprador" id="id_comprador">
                        </div>
                        <br>
                        <input type="submit" value="Generar recibo" class="btn btn-info">
                        </form>
                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>

                </div>
            </div>
        </div>
    </div>
</main>
</div>
</div>



<?php require_once 'view/layout/footer.php'; ?>