<?php require_once '../layout/dashboard.php'; ?>
<main role="main" class="col-md-9 ml-sm-auto  col-lg-10 px-md-4">
    <div class="d-flex justify-content-between mr-1 flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-1 border-bottom">
        <h2 class="h2">Productos</h2>
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


    <div class="container-sm w-75">
        <div class="float-left ">
            <table class="table table-sm table-borderless w-100  bg-white shadow">
                <tr>
                    <td rowspan="2" class="align-middle w-25  bg-danger  text-white">
                        <span class="btn bg-danger text-white w-100 ">
                            <svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-cart-dash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                <path fill-rule="evenodd" d="M6 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </span>
                    </td>
                    <td colspan="2" ><span class="h6">Productos eliminado</span></td>
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
                            <svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z" />
                            </svg>

                        </span>
                    </td>
                    <td colspan="2"><span class="h6">Productos agregados</span></td>
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
    <canvas class="my-4 w-100" id="myChart" width="300" height="115"></canvas>

    <hr>





    <div class="container-md w-25">
        <div class="input-group mb-3 ">
            <div class="input-group-prepend">
                <input type="text" class="form-control w-100 border border-success rounded-top " placeholder="Buscar productos" aria-label="Example text with button addon" aria-describedby="button-addon1">
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
        <table class="table table-striped table-sm text-center ">
            <thead class="bg-dark text-white h6">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Categoria</th>
                    <th>Vendedor</th>
                    <th>Ubicacion</th>
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


    <div class="modal" tabindex="-1" id="productos">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Carro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Informacion</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
</div>
<script>
    function mostarDetalles() {
        $('#productos').modal('show');
    }
</script>


<?php require_once '../layout/footer.php'; ?>