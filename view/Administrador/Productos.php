<?php require_once 'view/layout/dashboard.php'; ?>
<main role="main" class="col-md-9 ml-sm-auto  col-lg-10 px-md-4">
    <div class="d-flex justify-content-between mr-1 flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-1 border-bottom">
        <h2 class="h2">Productos</h2>
        
    </div>


    <!--Inputs con cantidad de productos  -->
    <!-- <div class="container w-75">
        <div class="float-left py-4 ">
            <div class="input-group flex-nowrap px-3 ">
                <div class="input-group-prepend ">
                    <span class="input-group-text btn-success active" id="addon-wrapping">
                        <svg width="1.6em" height="2em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z" />
                        </svg>
                    </span>
                </div>
                <input type="text" class="form-control" disabled aria-label="Username" readonly aria-describedby="addon-wrapping" disable>
            </div>

        </div>
        <div class="float-right py-4 ">
        
            <div class="input-group flex-nowrap px-3">
            
                <div class="input-group-prepend ">
                    <span class="input-group-text btn-danger active" id="inputGroup-sizing-lg">
                        <svg width="1.6em" height="2em" viewBox="0 0 16 16" class="bi bi-cart-dash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            <path fill-rule="evenodd" d="M6 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </span>
                </div>
                <input type="text" class="form-control" disabled aria-label="Username" readonly aria-describedby="inputGroup-sizing-lg" disable>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-1 bg-dark">.col-1<br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
            <div class="col-2 bg-success">.col-2<br>Subsequent columns continue along the new line.</div>
            <div class="col-3 bg-info">.col-3<br>Subsequent columns continue along the new line.</div>
            <div class="col-4 bg-primary">.col-4<br>Subsequent columns continue along the new line.</div>
            <div class="col-5 bg-danger">.col-5<br>Subsequent columns continue along the new line.</div>
            
            <div class="col-6 bg-warning">.col-6<br>Subsequent columns continue along the new line.</div>
            <div class="col-7 bg-primary">.col-7<br>Subsequent columns continue along the new line.</div>
            <div class="col-8 bg-dark">.col-8<br>Subsequent columns continue along the new line.</div>
            <div class="col-9 bg-danger">.col-9<br>Subsequent columns continue along the new line.</div>
            <div class="col-10 bg-success">.col-10<br>Subsequent columns continue along the new line.</div>
            <div class="col-11 bg-primary">.col-11<br>Subsequent columns continue along the new line.</div>
            <div class="col-12 bg-danger">.col-12<br>Subsequent columns continue along the new line.</div>
        </div>
      
    </div>-->
    <br>


    <div class="container-sm w-25 ">

        <table class="table table-sm table-borderless w-100  bg-white shadow">
            <tr>
                <td rowspan="2" class="align-middle w-25  bg-success  text-white">
                    <span class="btn bg-success text-white w-100 ">
                        <svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z" />
                        </svg>

                    </span>
                </td>
                <td colspan="2"><span class="h6">Productos agregados </span></td>
            </tr>
            <tr class=" border-top  w-75">
                <td class="w-25">
                    <span class="text-success text-left w-100 ">
                        <svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-arrow-up-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
                        </svg>
                    </span>
                </td>
                <td class="w-75"><span class="h5  text-success">
                <?php foreach ($this->model_productos->productos_agregados() as $resultado) {
                                echo $resultado['resultado'];
                            }  ?>
                </span></td>
            </tr>

        </table>
    </div>







    <!--Iconos contadores de productos -->
    <!--
    <div class="container w-50 py-3 ">
        <div class="float-left w-25">
            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text btn-success active" id="addon-wrapping">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z" />
                        </svg>
                    </span>
                </div>
                <input type="text" value="2" class="form-control text-center" disabled aria-label="Username" readonly aria-describedby="inputGroup-sizing-lg" disable>
            </div>
        </div>
        <div class="float-right w-25">

            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text btn-danger active" id="inputGroup-sizing-lg">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-dash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            <path fill-rule="evenodd" d="M6 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </span>
                </div>
                <input type="text" value="2" class="form-control text-center" disabled aria-label="Username" readonly aria-describedby="inputGroup-sizing-lg" disable>
            </div>
        </div>
    </div>


    <!---  -->
    <canvas class="my-4 w-100" id="GraficoProductos" width="300" height="115"></canvas>

    <hr>
   



    <div class="table-responsive ">
        <table class="table table-striped table-sm text-center ">
        <thead>
                <tr>
                    <td colspan="6" class="text-info h5">Listado de productos</td>
                </tr>
            </thead>
            <thead class="bg-dark text-white h6">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th>Vendedor</th>
                    <th>Ubicacion</th>
                    <th>Vista previa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->model_productos->listar_productos() as $row) : ?>
                    <tr>
                        <td><?= $row['id_producto'] ?></td>
                        <td><?= $row['nombre_producto'] ?></td>
                        <td><?= $row['nombre_categoria'] ?></td>
                        <td><?php foreach ($this->model_usuario->nombre_vendedor($row['id_vendedor']) as $resultado) {
                                echo $resultado['resultado'];
                            } ?></td>

                        <td><?= $row['ciudad'] ?></td>

                        <td><a class="btn btn-primary " href="javascript:void(0)" onclick="mostrarDetalles_productos(
                        '<?= $row['id_producto'] ?>',
                        '<?= $row['nombre_producto'] ?>',
                        '<?= $row['cantidad'] ?>',
                        '<?= $row['ciudad'] ?>',
                        '<?php foreach ($this->model_categorias->categoria_producto($row['categoria']) as $resultado) {
                                echo $resultado['resultado'];
                            } ?>',
                        '<?= $row['precio'] ?>',
                        '<?php foreach ($this->model_usuario->nombre_vendedor($row['id_vendedor']) as $resultado) {
                                echo $resultado['resultado'];
                            } ?>',
                        '<?= $row['estado'] ?>',
                        '<?= $row['marca'] ?>',
                        '<?= $row['descripcion'] ?>',
                        '<?= base_url . $row['imagen1'] ?>',
                        '<?= base_url . $row['imagen2'] ?>',
                        '<?= base_url . $row['imagen3'] ?>'



                    )"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
                                    <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                </svg></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <div class="modal" tabindex="-1" id="productos">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Informacion del producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="card">
                        <div id="carouselExampleInterval" class="carousel slide mh-50 " data-ride="carousel">
                            <div class="carousel-inner text-center">
                                <div class="carousel-item active  " data-interval="10000">
                                    <span id="imagen1"></span>
                                </div>
                                <div class="carousel-item" data-interval="2000">
                                    <span id="imagen2"></span>
                                </div>
                                <div class="carousel-item">
                                    <span id="imagen3"></span>
                                </div>
                            </div>
                            <a class="carousel-control-prev bg-dark" href="#carouselExampleInterval" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                                <span class="sr-only ">Anterior</span>
                            </a>
                            <a class="carousel-control-next bg-dark" href="#carouselExampleInterval" role="button" data-slide="next">
                                <span class="carousel-control-next-icon " aria-hidden="true"></span>
                                <span class="sr-only">Siguiente</span>
                            </a>
                        </div>
                        <h5 class="card-title bg-primary text-white p-1 text-center" id="nombre_producto"></h5>
                        <div class="card-body">

                            <h5 class="card-title">Descripcion</h5>
                            <p class="card-text" id="descripcion"></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">

                                <div class="container text-center mt-2">
                                    <div class="row">

                                        <div class="col-sm w-100 mr-2 text-justify border ">
                                            <table>
                                                <tr>
                                                    <td rowspan="2" class="pr-3">
                                                        <span>
                                                            <svg width="2.2em" height="2.2em" viewBox="0 0 16 16" class="bi bi-bag" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z" />
                                                            </svg> </span>
                                                    </td>
                                                    <td><strong>Id producto</strong></td>
                                                </tr>
                                                <tr>
                                                    <td id="id_producto"></td>
                                                </tr>
                                            </table>
                                        </div>

                                        <div class="col-sm w-100 ml-2 text-justify border ">
                                            <table class="">
                                                <tr>
                                                    <td rowspan="2" class="pr-3 ">
                                                        <span>
                                                            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-layout-text-sidebar" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                                                <path fill-rule="evenodd" d="M11 15V1h1v14h-1zM3 3.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                                            </svg>
                                                        </span>
                                                    </td>
                                                    <td><strong>Categoria</strong></td>
                                                </tr>
                                                <tr>
                                                    <td id="categoria">fgfg</td>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>

                                <div class="container text-center mt-2">
                                    <div class="row">

                                        <div class="col-sm w-100 mr-2 text-justify border ">

                                            <table>
                                                <tr>
                                                    <td rowspan="2" class="pr-3">
                                                        <span>
                                                            <svg width="2.2em" height="2.2em" viewBox="0 0 16 16" class="bi bi-cash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M15 4H1v8h14V4zM1 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H1z" />
                                                                <path d="M13 4a2 2 0 0 0 2 2V4h-2zM3 4a2 2 0 0 1-2 2V4h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 12a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                                                            </svg>
                                                        </span>
                                                    </td>
                                                    <td><strong>Precio</strong></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-success" id="precio"></td>
                                                </tr>
                                            </table>
                                        </div>

                                        <div class="col-sm w-100 ml-2 text-justify border ">
                                            <table class="">
                                                <tr>
                                                    <td rowspan="2" class="pr-3 ">
                                                        <span>
                                                            <svg width="2.2em" height="2.2em" viewBox="0 0 16 16" class="bi bi-clipboard-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                                                <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zm4.354 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                                            </svg>
                                                        </span>
                                                    </td>
                                                    <td><strong>Estado</strong></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-danger" id="estado"></td>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>

                                <div class="container text-center mt-2">
                                    <div class="row">

                                        <div class="col-sm w-100 mr-2 text-justify border ">
                                            <table>
                                                <tr>
                                                    <td rowspan="2" class="pr-3">
                                                        <span>
                                                            <svg width="2.2em" height="2.2em" viewBox="0 0 16 16" class="bi bi-clipboard-data" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                                                <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                                                                <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z" />
                                                            </svg>
                                                        </span>
                                                    </td>
                                                    <td><strong>Cantidad</strong></td>
                                                </tr>
                                                <tr>
                                                    <td id="cantidad"></td>
                                                </tr>
                                            </table>
                                        </div>

                                        <div class="col-sm w-100 ml-2 text-justify border ">
                                            <table class="">
                                                <tr>
                                                    <td rowspan="2" class="pr-3 ">
                                                        <span>
                                                            <svg width="2.2em" height="2.2em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                                                <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                                            </svg>
                                                        </span>
                                                    </td>
                                                    <td><strong>Ciudad</strong></td>
                                                </tr>
                                                <tr>
                                                    <td id="ciudad"></td>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>




                                <div class="container text-center mt-2">
                                    <div class="row">

                                        <div class="col-sm w-100 mr-2 text-justify border ">
                                            <table>
                                                <tr>
                                                    <td rowspan="2" class="pr-3">
                                                        <span>
                                                            <svg width="2.2em" height="2.2em" viewBox="0 0 16 16" class="bi bi-person-badge" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M2 2.5A2.5 2.5 0 0 1 4.5 0h7A2.5 2.5 0 0 1 14 2.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2.5zM4.5 1A1.5 1.5 0 0 0 3 2.5v10.795a4.2 4.2 0 0 1 .776-.492C4.608 12.387 5.937 12 8 12s3.392.387 4.224.803a4.2 4.2 0 0 1 .776.492V2.5A1.5 1.5 0 0 0 11.5 1h-7z" />
                                                                <path fill-rule="evenodd" d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM6 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5z" />
                                                            </svg>
                                                        </span>
                                                    </td>
                                                    <td><strong>Nombre vendedor</strong></td>
                                                </tr>
                                                <tr>
                                                    <td id="id_vendedor"></td>
                                                </tr>
                                            </table>
                                        </div>

                                        <div class="col-sm w-100 ml-2 text-justify border ">
                                            <table class="">
                                                <tr>
                                                    <td rowspan="2" class="pr-3 ">
                                                        <span>
                                                            <svg width="2.2em" height="2.2em" viewBox="0 0 16 16" class="bi bi-badge-tm" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.295 11V5.995H7V5H2.403v.994h1.701V11h1.19zm3.397 0V7.01h.058l1.428 3.239h.773l1.42-3.24h.057V11H13.5V5.001h-1.2l-1.71 3.894h-.039l-1.71-3.894H7.634V11h1.06z" />
                                                                <path fill-rule="evenodd" d="M14 3H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
                                                            </svg>
                                                        </span>
                                                    </td>
                                                    <td><strong>Marca</strong></td>
                                                </tr>
                                                <tr>
                                                    <td id="marca"></td>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>

                                </div>

                            </li>
                        </ul>
                    </div>

                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn bg-dark btn-block p-0 m-0 " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span class="h5 text-white">Acciones</span>
                                        <span class="text-white">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                            </svg>
                                        </span>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>



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