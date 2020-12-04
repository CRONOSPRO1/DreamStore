<?php

if ($_SESSION['id_usuario']) {
} else {
    header("location:" . base_url . "Principal/Index");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url ?>assets/css/menu.css" type="text/css">
    <title>DREAM STORE</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark" id="may">
        <a class=" font-strong h4 text-white" href="<?= base_url ?>Cliente/index">DREAM STORE</a>
        <div class="container">
            <div class="float-left">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <nav class="navbar navbar-dark">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" id="buscar" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success text-white" type="submit ">Busqueda</button>
                    </form>

                </nav>
            </div>
            <div class="float-right">

                <div class="collapse navbar-collapse  navbar-right pl-2 " id="navbarNav">
                    <ul class="navbar-nav text-center">
                        <li class="nav-item active pl-2">
                            <svg class="bi bi-alert-triangle text-white" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            </svg>
                            <a class="nav-link text-white" href="<?= base_url ?>Cliente/Carrito">Carrito</a>
                        </li>

                        <li class="nav-item active pl-2">
                            <svg class="bi bi-alert-triangle text-white" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-bell-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                            </svg>
                            <a class="nav-link text-white" href="#">Notificacion</a>
                        </li>

                        <li class="nav-item active pl-2">
                            <svg class="bi bi-alert-triangle text-white" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-down-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                            </svg>
                            <a class="nav-link text-white" href="<?= base_url ?>cliente/compras">compras</a>
                        </li>

                        <li class="nav-item active pl-2">
                            <a href="#" data-toggle="modal" class="text-white" data-target="#chat">
                                <svg class="bi bi-alert-triangle text-white" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-chat-quote-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766c.087.124.163.26.227.401.428.948.393 2.377-.942 3.706a.446.446 0 0 1-.612.01.405.405 0 0 1-.011-.59c.419-.416.672-.831.809-1.22-.269.165-.588.26-.93.26C4.775 9.333 4 8.587 4 7.667 4 6.747 4.776 6 5.734 6c.271 0 .528.06.756.166l.008.004c.169.07.327.182.469.324.085.083.161.174.227.272zM11 9.073c-.269.165-.588.26-.93.26-.958 0-1.735-.746-1.735-1.666 0-.92.777-1.667 1.734-1.667.271 0 .528.06.756.166l.008.004c.17.07.327.182.469.324.085.083.161.174.227.272.087.124.164.26.228.401.428.948.392 2.377-.942 3.706a.446.446 0 0 1-.613.01.405.405 0 0 1-.011-.59c.42-.416.672-.831.81-1.22z" />
                                </svg>
                                <span class="nav-link text-white" href="#">Quejas</span></a>
                        </li>

                        <li class="nav-item active pl-2">
                            <a href="#" data-toggle="modal" class="text-white" data-target="#registrar_producto">
                                <svg class="bi bi-alert-triangle text-white" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-basket3-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172z" />
                                    <path d="M2.468 15.426L.943 9h14.114l-1.525 6.426a.75.75 0 0 1-.729.574H3.197a.75.75 0 0 1-.73-.574z" />
                                </svg>
                                <a class="nav-link text-white">Vender</a>
                            </a>
                        </li>

                        <li class="nav-item active pl-2">
                            <a href="#" data-toggle="modal" class="text-white" data-target="#cerrar">
                                <svg class="bi bi-alert-triangle text-white" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-person-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                    <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>
                                <span class="nav-link text-white"><?= $_SESSION['nombre_usuario'] ?></span></a>
                        </li>




                        <li class="nav-item active pl-2">
                            <a href="<?= base_url ?>Cliente/MisProductos">
                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart-check text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                    <path fill-rule="evenodd" d="M11.354 5.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                </svg>
                                <span class="nav-link text-white" href="#">Productos</span></a>
                        </li>
                    </ul>
                </div>


            </div>
        </div>

    </nav>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Menu Principal</a></li>
            <li class="breadcrumb-item active" aria-current="page">Historial</li>
            <li class="breadcrumb-item active" aria-current="page">Historial Ultimo Mes</li>
        </ol>
    </nav>


    <!--Chat-->
    <div class="modal fade" id="chat" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title text-white" id="staticBackdropLabel">Quejas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <small id="emailHelp" class="form-text text-muted">Envias tus quejas o sugerencias al administrador de la pagina</small>
                <br>
                    <form method="POST" action="<?=base_url?>Cliente/Queja">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Escribe aqui tu mensaje</label>
                            <textarea type="text" name="queja"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                            <input type="hidden" name="id_usuario" value="<?=$_SESSION['id_usuario']?>">
                           
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Respuesta</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" readonly>
                        </div>
                        <input  type="submit" class="btn btn-primary" value="Enviar Queja">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="cerrar" tabindex="-1" aria-labelledby="Registrar" aria-hidden="true">
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
                    <a type="button" href="<?= base_url ?>Cliente/CerrarSesion" class="btn btn-primary">Cerrar Sesion</a>
                </div>
            </div>
        </div>
    </div>




    <!--Registrar producto-->
    <div class="modal fade " id="registrar_producto" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                        <form method="POST" action="<?= base_url ?>Cliente/Guardar_producto" enctype="multipart/form-data">

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
                                <input type="hidden" name="id_vendedor" value="<?= $_SESSION['id_usuario'] ?>">
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