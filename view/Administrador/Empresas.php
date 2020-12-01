<?php require_once 'view/layout/dashboard.php'; ?>
<main role="main" class="col-md-9 ml-sm-auto  col-lg-10 px-md-4">
    <div class="d-flex justify-content-between mr-1 flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-1 border-bottom">
        <h2 class="h2">Empresas</h2>

    </div>

    <div class="container-sm w-25">
<br>
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
                <td><span class="h6">Empresas registradas</span></td>
            </tr>
            <tr class=" border-top   text-center">

                <td class="w-75"><span class="h5  text-success ">
                        <?php foreach ($this->model_empresa->empresas_registradas() as $row) {
                            echo $row['resultado'];
                        } ?></span> </td>
            </tr>

        </table>


    </div>


    <canvas class="my-4 w-100" id="GraficoEmpresas" width="300" height="115"></canvas>

    <hr>

    


    <div class="table-responsive ">
        <table class="table table-striped table-sm text-center aling-middle">
        <thead>
                <tr>
                    <td colspan="6" class="text-info h5">Listado de empresas</td>
                </tr>
            </thead>
            <thead class="bg-dark text-white h6">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Ciudad</th>
                    <th>Vista previa</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($this->model_empresa->listar_empresas() as $row) : ?>
                    <tr>
                        <td><?= $row['id_cli_pro'] ?></td>
                        <td><?= $row['nombre'] ?></td>
                        <td><?= $row['telefono'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['ciudad'] ?></td>

                        <td> <a class="btn btn-primary " href="javascript:void(0)" onclick="mostrarDetalles_empresa(
                        '<?= $row['nombre'] ?>',
                        '<?= $row['numero_identificacion'] ?>',
                        '<?= $row['ciudad'] ?>',
                        '<?= $row['email'] ?>',
                        '<?= $row['telefono'] ?>',
                        '<?php foreach ($this->model_productos->productos_usuario($row['id_cli_pro']) as $resultado) {
                                echo $resultado['resultado'];
                            } ?>',
                        '<?php foreach ($this->model_ventas->ventas_usuario($row['id_cli_pro']) as $resultado) {
                                echo $resultado['resultado'];
                            } ?>'
                    
                        )">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
                                    <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                </svg></a></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>



    <div class="modal" tabindex="-1" id="empresas">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title h4" style="color:rgb(0, 199, 189)">Usuario</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">

                    <div class="card w-100">
                        <div class="card-header text-center" id="fondo_usuario">

                            <img src="<?=base_url ?>assets/img/perfil.png" class="card-img-top rounded-circle bg-white rounded w-25" alt="...">
                        </div>
                        <h5 class="card-title bg-dark text-white p-1 text-center" id="nombre"></h5>

                        <div class="card-body">
                            <h5 class="card-title">Informacion de la empresa</h5>
                            <li class="list-group-item">
                                <table>
                                    <tr>
                                        <td rowspan="2" class="pr-3">
                                            <span><svg width="2.2em" height="2.2em" viewBox="0 0 16 16" class="bi bi-person-badge-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z" />
                                                </svg></span>
                                        </td>
                                        <td><strong>Numero de identificacion</strong></td>
                                    </tr>
                                    <tr>
                                        <td id="numero_identificacion"></td>
                                    </tr>
                                </table>
                            </li>
                            <li class="list-group-item">
                                <table>
                                    <tr>
                                        <td rowspan="2" class="pr-3">
                                            <span>
                                                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z" />
                                                </svg>
                                            </span>
                                        </td>
                                        <td><strong>Telefono</strong></td>
                                    </tr>
                                    <tr>
                                        <td id="telefono"></td>

                                    </tr>
                                </table>
                            </li>
                            <li class="list-group-item">
                                <table>
                                    <tr>
                                        <td rowspan="2" class="pr-3">
                                            <span>
                                                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                                                </svg>
                                            </span>
                                        </td>
                                        <td><strong>Email</strong></td>
                                    </tr>
                                    <tr>
                                        <td id="email"></td>

                                    </tr>
                                </table>
                            </li>
                            <li class="list-group-item">
                                <table>
                                    <tr>
                                        <td rowspan="2" class="pr-3">
                                            <span>
                                                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-building" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                                                    <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                                                </svg>
                                            </span>
                                        </td>
                                        <td><strong>Ciudad</strong></td>
                                    </tr>
                                    <tr>
                                        <td id="ciudad"></td>

                                    </tr>
                                </table>

                            </li>
                        </div>
                    </div>



                    <div class="card w-100">

                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header " id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn bg-dark btn-block p-0 m-0 " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span class="h5 text-white">Productos</span>
                                            <span class="text-white">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                                </svg>
                                            </span>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">

                                    <div class="card-body">

                                        <li class="list-group-item">
                                            <table>
                                                <tr>
                                                    <td rowspan="2" class="pr-3">
                                                        <span><svg width="2.2em" height="2.2em" viewBox="0 0 16 16" class="bi bi-person-badge-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z" />
                                                            </svg></span>
                                                    </td>
                                                    <td><strong>Productos publicados</strong></td>
                                                </tr>
                                                <tr>



                                                    <td id="productos_publicados">
                                                        <!-- Aun no funciona correctamente  -->

                                                    </td>



                                                </tr>
                                            </table>
                                        </li>
                                        <li class="list-group-item">

                                            <table>
                                                <tr>
                                                    <td rowspan="2" class="pr-3">
                                                        <span>
                                                            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-building" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                                                                <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                                                            </svg>
                                                        </span>
                                                    </td>
                                                    <td><strong>Productos vendidos</strong></td>
                                                </tr>
                                                <tr>


                                                    <td id="productos_vendidos">
                                                        <!-- Aun no funciona correctamente , falta pasarle el parametro del id  -->

                                                    </td>

                                                </tr>
                                            </table>

                                        </li>
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






    <?php require_once 'view/layout/footer.php'; ?>