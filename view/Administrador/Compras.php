<?php require_once 'view/layout/dashboard.php'; ?>
<main role="main" class="col-md-9 ml-sm-auto  col-lg-10 px-md-4">
    <div class="d-flex justify-content-between mr-1 flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-1 border-bottom">
        <h2 class="h2">Compras</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button type="button" class="btn  btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-minus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                            <path fill-rule="evenodd" d="M5.5 9.5A.5.5 0 0 1 6 9h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </span>Filtrar
                </button>
                <div class="dropdown-menu ">
                    <a class="dropdown-item" href="#">Dia</a>
                    <a class="dropdown-item" href="#">Semana</a>
                    <a class="dropdown-item" href="#">Mes</a>
                    <a class="dropdown-item" href="#">Año</a>
                </div>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-info">Exportar PDF</button>


            </div>


        </div>
    </div>

    <br>


    <div class="container-sm w-75">
        <div class="float-left ">
            <table class="table table-sm table-borderless w-100  bg-white shadow">
                <tr>
                    <td rowspan="2" class="align-middle w-25  bg-danger  text-white">
                        <span class="btn bg-danger text-white w-100 ">
                            <svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-person-dash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zM11 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </span>
                    </td>
                    <td colspan="2"><span class="h6">Usuarios eliminados</span></td>
                </tr>
                <tr class=" border-top  w-75">
                    <td class="w-25">
                        <span class="text-danger text-left w-100 ">
                            <svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-arrow-down-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                            </svg>
                        </span>
                    </td>
                    <td class="w-75"><span class="h5  text-danger ">24</span> </td>
                </tr>

            </table>
        </div>
        <div class="float-right ">
            <table class="table table-sm table-borderless w-100  bg-white shadow">
                <tr>
                    <td rowspan="2" class="align-middle w-25  bg-success  text-white">
                        <span class="btn bg-success text-white w-100 ">
                            <svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-person-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zM13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                        </span>
                    </td>
                    <td colspan="2"><span class="h6">Usuarios eliminados</span></td>
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
                    <td class="w-75"><span class="h5  text-success ">24</span> </td>
                </tr>

            </table>
        </div>

    </div>






    <canvas class="my-4 w-100" id="myChart" width="300" height="115"></canvas>

    <hr>




    <div class="container-md w-25">
        <div class="input-group mb-3 ">
            <div class="input-group-prepend">
                <input type="text" class="form-control w-100 border border-success rounded-top " placeholder="Buscar usuarios" aria-label="Example text with button addon" aria-describedby="button-addon1">
                <button class="btn btn-outline-success active" type="button" id="button-addon1"><span>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                        </svg>
                    </span></button>
            </div>

        </div>
    </div>



    <div class="table-responsive ">
        <table class="table table-striped table-sm text-center aling-middle">
            <thead class="bg-dark text-white h6">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Email</th>

                    <th>Ciudad</th>

                    <th>Vista previa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>lorem</td>
                    <td class="w-25 ">Lorem ipitaque?</td>
                    <td>lorem</td>
                    <td>Juan</td>
                    <td>Bogota</td>



                    <td><a class="btn btn-primary " href="javascript:void(0)" onclick="mostarDetalles()"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
                                <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                            </svg></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>lorem</td>
                    <td class="w-25 ">Lorem ipitaque?</td>
                    <td>lorem</td>
                    <td>Juan</td>
                    <td>Bogota</td>

                    <td><a class="btn btn-primary" href="javascript:void(0)" onclick="mostarDetalles()"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
                                <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                            </svg></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>lorem</td>
                    <td class="w-25 ">Lorem ipitaque?</td>
                    <td>lorem</td>
                    <td>Juan</td>
                    <td>Bogota</td>

                    <td><a class="btn btn-primary" href="javascript:void(0)" onclick="mostarDetalles()"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
                                <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                            </svg></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>lorem</td>
                    <td class="w-25 ">Lorem ipitaque?</td>
                    <td>lorem</td>
                    <td>Juan</td>
                    <td>Bogota</td>

                    <td><a class="btn  btn-primary" href="javascript:void(0)" onclick="mostarDetalles()"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
                                <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                            </svg></a></td>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="modal" tabindex="-1" id="usuarios">
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
                        <span class="h6">Compra #2267035317 - 29 de diciembre</span>

                        <div class="container-fluid mt-3 text-left">

                            <li class="list-group-item ">
                                <table>
                                    <tr>
                                        <td rowspan="3" class="pr-3">
                                            <span>
                                                <img src="../../assets/img/perfil.png" width="30em" height="30em" alt="">
                                            </span>
                                        </td>
                                        <td><strong>Producto</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Audifonos Sony</td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-success">$33.000</span></td>
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
                                        <td>123</td>

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
                                        <td>123</td>

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
                                        <td>123</td>

                                    </tr>
                                </table>
                            </li>

                        </div>
                        <br>
                        <button type="button" class="btn btn-info">Generar recibo</button>
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
<script>
    function mostarDetalles() {
        $('#usuarios').modal('show');
    }
</script>


<?php require_once 'view/layout/footer.php'; ?>