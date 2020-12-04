<?php

if ($_SESSION['id_empresa']) {
} else {
    header("location:" . base_url . "Principal/Index");
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Empresa</title>
    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url ?>assets/css/main.css">
    <link rel="stylesheet" href="<?= base_url ?>assets/css/select2.min.css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?= base_url ?>assets/css/dashboard.css" rel="stylesheet">
</head>
<script>
    $('.popover-dismiss').popover({
        trigger: 'focus'
    })
</script>

<body>

    <nav class="navbar navbar-dark sticky-top bg-dark w-100 flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#"><span class="h3">Dream Store</span></a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>






        <ul class="navbar-nav navbar-expand-lg px-5  text-right ">


            <div class="mr-auto p-3 text-center">
                <span class="mr-4" id="span-margen"></span>
                <a data-toggle="modal" data-target="#notificar" href="" class="text-light" id="Notificacion">
                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-chat-square-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h2.5a2 2 0 0 1 1.6.8L8 14.333 9.9 11.8a2 2 0 0 1 1.6-.8H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path fill-rule="evenodd" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </a>



            </div>



            <div class="mr p-3 text-center">
                <span class="mr-4" id="span-margen"></span>
                <a data-toggle="modal" data-target="#registro" href="#" class="text-light" id="Usuario">

                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg><span><?= $_SESSION['nombre_empresa'] ?></span>
                </a>

                <div class="card ventana-notificaciones mt-2 position-absolute mr-5" id="ventanaU" style="display: none;">
                    <div id="contentnoti" class="shadow">
                        <li class="list-group-item text-dark text-left border-0" style="font-weight:600;">
                            <h6 class="mb-0">Notificaciones</h6>
                        </li>

                        <li class="list-group-item text-left py-0" style="border:none;width:100%;font-size:14px;">
                            <div>
                                <div class="d-flex flex-row">
                                    <div class="pl-3" title="Autor">
                                    </div>
                                    <div style="max-width:100%;">
                                        <a class="a-notificaciones p-0 text-dark mt-0" href="#">Quedán menos de 10 cantidades para los martillos</a>
                                        <p class="text-muted notificaciones-descri">Descripción</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>
            </div>



        </ul>

    </nav>




    <div class="container-fluid">
        <div class="row ">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark   sidebar collapse">
                <div class="sidebar-sticky pt-3 ">
                    <ul class="nav flex-column mt-2">
                        <li class="nav-item">
                            <a class="nav-link " href="<?= base_url ?>Empresa/Home">
                                <span data-feather="home"></span>Home <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?= base_url ?>Empresa/usuarios">
                                <span data-feather="users"></span>Usuarios Registrados
                            </a>
                        </li>

                        <li class="nav-item  ">
                            <a class="nav-link " href="<?= base_url ?>Empresa/Productos">


                                <span data-feather="shopping-cart">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-seam" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                                    </svg>
                                </span>Productos Empresa
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="<?= base_url ?>Empresa/Ventas">
                                <span>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                        <path fill-rule="evenodd" d="M11.354 5.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                    </svg>
                                </span>Ventas Empresa
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="<?= base_url ?>Empresa/Recibo">


                                <span data-feather="Receipt cutoff">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-receipt-cutoff" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v13h-1V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51L2 2.118V15H1V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zM0 15.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z" />
                                        <path fill-rule="evenodd" d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-8a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                    </svg>
                                </span>Compras
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="<?= base_url ?>Empresa/agendar">


                                <span data-feather="Journals">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-journals" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 2h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2z" />
                                        <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2zM1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                    </svg>
                                </span> Agenda Empresas
                            </a>
                        </li>
                    </ul>


                </div>
            </nav>

            <!-- Modal Registrar -->
            <div class="modal fade" id="registro" tabindex="-1" aria-labelledby="Registrar" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="Registrar">Mi cuenta <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shop" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" /></svg></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                        </div>
                        <div class="modal-footer">
                            <a type="button" href="<?= base_url ?>Empresa/CerrarSesion" class="btn btn-primary">Cerrar Sesion</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Notificar -->
            <div class="modal fade" id="notificar" tabindex="-1" aria-labelledby="Notificacion" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="Notificacion">Notificaciones <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" /></svg></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="toast-header">
                                <strong class="mr-auto"></strong>
                                <small>11 mins ago</small>
                            </div>
                            <div class="toast-body">
                                <h6>Hola! Bienvenido a Dream Store.</h6>
                                <br>
                                <p>Espera las ultimas promociones que tenemos para ti.</p>
                                <p>No te lo pierdas</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <!--Registrar producto-->
    <div class="modal fade " id="nuevo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header text-light bg-info">
                    <h5 class="modal-title h4" id="staticBackdropLabel">Registrar producto</h5>
                    <button class="close ext-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-light">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container p-4">
                        <form method="POST" action="<?= base_url ?>Empresa/Guardar_producto" enctype="multipart/form-data">

                            <div class="form-group w-100 ">
                                <label for="exampleInputtext">Nombre Del Producto*</label>
                                <input type="text" name="nombre_producto" class="form-control  w-100">
                            </div>
                            <div class="form-group w-100 ">
                                <label for="exampleInputtext">Descripcion*</label>
                                <input type="text" name="descripcion" class="form-control ">
                            </div>
                            <fieldset class="form-group w-100 ">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Cantidad*</legend>
                                    <div class="col-sm-5">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="cantidad" id="opcion1" value="1" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                1
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="cantidad" id="opcion2" value="2">
                                            <label class="form-check-label" for="gridRadios2">
                                                2
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <input class="form-check-input" type="radio" name="cantidad" id="opcion3" value="3">
                                            <label class="form-check-label" for="gridRadios3">
                                                3
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="form-group w-100 ">
                                <label for="exampleInputtext">Ciudad*</label>
                                <input type="text" name="ciudad" class="form-control ">
                            </div>
                            <div class="form-group w-100 col-md-4 ">
                                <label for="inputState">Categoria*</label>
                                <select class="form-control" name="categoria">
                                    <option value="" selected></option>
                                    <option value="1">Tecnologia</option>
                                    <option value="2">Salud</option>
                                    <option value="3">Moda y Accesorios</option>
                                    <option value="4">Belleza y Cuidado de la piel</option>
                                    <option value="5">Deportes</option>
                                    <option value="6">Bebes y Juguetes</option>
                                    <option value="7">Productos de Aseo</option>
                                    <option value="8">Supermercado</option>
                                    <option value="9">Carros y Motos</option>
                                    <option value="10">Inmuebles</option>
                                    <option value="12">Mascotas</option>
                                    <option value="13">Hogar y Decoracion</option>
                                    <option value="14">Libreria</option>

                                </select>
                            </div>
                            <div class="col">
                                <label for="exampleInputtext">Precio*</label>
                                <input type="text" name="precio" class="form-control " placeholder="ingrese el valor del producto">
                            </div>

                            <div class="col">
                                <label for="exampleInputtext">Marca Del Producto*</label>
                                <input type="text" name="marca" class="form-control " placeholder=" ingrese la marca del producto">
                            </div>
                            <div>
                                <label for="exampleInputtext">Fecha</label>
                                <input type="date" name="fecha" class="form-control ">
                            </div>

                            <div class="form-group w-100">
                                <label for="exampleFormControlFile1">Imagen Del Producto</label>
                                <input type="file" name="imagen1" class="form-control-file" id="exampleFormimagen1">
                            </div>


                            <div class="form-group w-100">
                                <label for="exampleFormControlFile1">Imagen Del Producto</label>
                                <input type="file" name="imagen2" class="form-control-file" id="exampleFormimagen1">
                            </div>

                            <div class="form-group w-100">
                                <label for="exampleFormControlFile1">Imagen Del Producto</label>
                                <input type="file" name="imagen3" class="form-control-file" id="exampleFormimagen1">
                                <input type="hidden" name="id_vendedor" value="<?= $_SESSION['id_empresa'] ?>">
                            </div>


                            <input type="submit" class="btn btn-primary text-center" value="Publicar">
                        </form>
                    </div>








                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>