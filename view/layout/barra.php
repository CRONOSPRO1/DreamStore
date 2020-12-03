<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url ?>assets/css/menu.css" type="text/css">
    <!-- Font Awesome -->

    <title>DREAM STORE</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark py-3">
        <a class=" font-strong h4 text-white" href="<?= base_url ?>Principal/Index">DREAM STORE</a>
        <div class="container">
            <div class="float-left">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <nav class="navbar ">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" id="buscar" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success text-white" type="submit ">Busqueda</button>
                    </form>

                </nav>
            </div>
            <div class="float-right">

                <div class="collapse navbar-collapse  navbar-right pl-2 " id="navbarNav">
                    <ul class="navbar-nav text-center">
                        <a href="<?= base_url ?>Principal/carrito" class="text-white">
                            <li class="nav-item active pl-3">
                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                </svg>
                                <span class="nav-link text-white" href="#">Carrito
                        </a>
                        </li>

                        <li class="nav-item active pl-3">
                            <a href="" data-toggle="modal" class="text-white" data-target="#vender">
                                <svg class="bi bi-alert-triangle text-white" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-basket3-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172z" />
                                    <path d="M2.468 15.426L.943 9h14.114l-1.525 6.426a.75.75 0 0 1-.729.574H3.197a.75.75 0 0 1-.73-.574z" />
                                </svg>
                                <span class="nav-link text-white" href="#">Vender</a>
                        </li>

                        <li class="nav-item active pl-3">
                            <a href="" data-toggle="modal" class="text-white" data-target="#iniciar">
                                <svg class="bi bi-alert-triangle text-white" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-person-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                    <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>
                                <span class="nav-link text-white">Iniciar Sesion</a>
                            </a>
                        </li>
                        <li class="nav-item active pl-3">
                            <a href="" data-toggle="modal" class="text-white" data-target="#registrar">
                                <svg class="bi bi-alert-triangle text-white" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-person-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                    <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>
                                <span class="nav-link text-white" href="#">Registrarse</a>
                            </a>

                        </li>

                        <li class="nav-item active pl-3">
                            <svg class="bi bi-alert-triangle text-white" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-question-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033a.237.237 0 0 1-.24-.247C5.35 4.091 6.737 3.5 8.005 3.5c1.396 0 2.672.73 2.672 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.105a.25.25 0 0 1-.25.25h-.81a.25.25 0 0 1-.25-.246l-.004-.217c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.803 0-1.253.478-1.342 1.134-.018.137-.128.25-.266.25h-.825zm2.325 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z" />
                            </svg>
                            <span class="nav-link text-white" href="#">Ayuda</a>
                        </li>
                    </ul>
                </div>


            </div>
        </div>







    </nav>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url ?>Principal/Index">Menu Principal</a></li>
            <li class="breadcrumb-item active" aria-current="page">Historial</li>
            <li class="breadcrumb-item active" aria-current="page">Historial Ultimo Mes</li>
        </ol>
    </nav>




    <div class="container w-100">
        <div class="btn-group dropright">
            <button type="button" class="btn  btn-outline-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categorias
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Tecnologia</a>
                <a class="dropdown-item" href="#">Salud</a>
                <a class="dropdown-item" href="#">Moda y Accesorios</a>
                <a class="dropdown-item" href="#">Belleza y Cuidado de la piel</a>
                <a class="dropdown-item" href="#">Deportes</a>
                <a class="dropdown-item" href="#">Bebes y Juguetes</a>
                <a class="dropdown-item" href="#">Productos de Aseo</a>
                <a class="dropdown-item" href="#">Supermercado</a>
                <a class="dropdown-item" href="#">Carros y Motos</a>
                <a class="dropdown-item" href="#">Inmuebles</a>
                <a class="dropdown-item" href="#">Mascotas</a>
                <a class="dropdown-item" href="#">Hogar y Decoracion</a>
                <a class="dropdown-item" href="#">Libreria</a>
                <a class="dropdown-item" href="#">Epoca del Año</a>
            </div>
        </div>
    </div>

    <!--Moddal para registrar-->
    <div class="modal fade" id="iniciar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog w-75 text-center">
            <div class="modal-content text-center w-75">
                <div class="modal-header bg-info text-light">
                    <h5 class="modal-title " id="staticBackdropLabel">Iniciar sesion</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <form method="POST" action="<?= base_url ?>Principal/validar">
                        <div class="form-group">
                            <label for="identificacion">Identificacion</label>
                            <input type="text" class="form-control" name="identificacion" id="identificacion" aria-describedby="emailHelp">
                            <small class="form-text text-muted"></small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Contraseña</label>
                            <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
                        </div>

                </div>
                <div class="modal-footer">
                    <div class="container-sm"></div>
                    <button type="submit" class="btn btn-success ">Inicar sesion</button>
                    </form>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>







    <!--Moddal para iniciar sesion-->
    <div class="modal fade " id="registrar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header text-light bg-info">
                    <h5 class="modal-title h4" id="staticBackdropLabel">Registrarse como usuario</h5>
                    <button class="close ext-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-light">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="<?= base_url ?>Principal/registrar" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <label for="nombre">Nombres</label>
                                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingrese su nombre" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-7 mb-3">
                                <label for="apellido">Apellido</label>
                                <input type="text" name="apellido" class="form-control" id="apellido" value="" placeholder="Ingrese su apellido" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Ingrese su email" id="email" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="identificacion">Numero de identificación</label>
                                <input type="number" name="identificacion" id="identificacion" class="form-control" placeholder="Ingrese su numero de identificacion" id="validationCustom05" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="tipo_identificacion">Tipo identificacion</label>
                                <select class="custom-select" name="tipo_identificacion" id="tipo_identificacion" required>
                                    <option selected disabled value="">Identificacion</option>
                                    <option value="Cedula">Cedula</option>
                                    <option value="Pasaporte">Pasaporte</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <label for="ciudad">Ciudad</label>
                                <input type="text" name="ciudad" class="form-control" placeholder="Ingrese su ciudad" id="ciudad" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom04">Direccion</label>
                                <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Ingrese su direccion" id="validationCustom05" required>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="telefono">Telefono</label>
                                <input type="number" name="telefono" class="form-control" placeholder="Ingrese su numero de telefono" id="telefono" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <label for="pass">Contraseña</label>
                                <input type="password" name="pass" class="form-control " id="pass" value="" placeholder="Ingrese su contraseña" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-7 mb-3">
                                <label for="imagen">Foto de perfil</label>
                                <input type="file" name="imagen" class="form-control p-2" accept="image/gif, image/jpeg, image/png" id="imagen" placeholder="Ingrese su nombre" required>
                                <input type="hidden" name="rol" value="usuario">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Acepto los terminos y condiciones
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>

                        <input class="btn btn-info" type="submit" value="Registrarse">
                    </form>


                </div>
                <div class="modal-footer">
                    <button type="button" data-toggle="modal" data-target="#registrar_empresa" class="btn btn-info" data-dismiss="modal">Cambiar a registro de empresa</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <!--Vender-->


    <div class="modal fade" id="vender" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Publica tus productos a un solo click!
                         <span class="text-success">
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-bag-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z" />
                                <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            </svg>
                        </span> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="<?= base_url ?>assets/img/vender.jpg" width="100%" alt="">
                    <br>
                    <br>
                    <button type="button" class="btn btn-primary" data-toggle="modal" class="text-white" data-target="#registrar" data-dismiss="modal">Registrate y publica</button>
                </div>
                <div class="modal-footer">
                    <button type="button"   class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!--Modal para registro de empresa-->
    <div class="modal fade " id="registrar_empresa" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header text-light bg-primary">
                    <h5 class="modal-title h4" id="staticBackdropLabel">Registrarse como empresa</h5>
                    <button class="close ext-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-light">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?= base_url ?>Principal/registrar" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="nombre">Nombre de la empresa</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Ingrese su email" id="email" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-7 mb-3">
                                <label for="identificicacion">NIT</label>
                                <input type="number" name="identificacion" class="form-control" placeholder="Ingrese su numero de identificacion" id="identificicacion" required>
                                <input type="hidden" name="tipo_identificacion" value="NIT">
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>


                        </div>
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <label for="ciudad">Ciudad</label>
                                <input type="text" name="ciudad" class="form-control" placeholder="Ingrese su ciudad" id="ciudad" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="direccion">Direccion</label>
                                <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Ingrese su direccion" required>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="telefono">Telefono</label>
                                <input type="number" name="telefono" class="form-control" placeholder="Ingrese su numero de telefono" id="telefono" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <label for="pass">Contraseña</label>
                                <input type="password" name="pass" class="form-control " id="pass" value="" placeholder="Ingrese su contraseña" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-7 mb-3">
                                <label for="imagen">Logo</label>
                                <input type="file" name="imagen" class="form-control p-2" accept="image/gif, image/jpeg, image/png" id="imagen" placeholder="Ingrese su nombre" required>
                                <input type="hidden" name="rol" value="empresa">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Acepto los terminos y condiciones
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Registrarse">
                    </form>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registrar" data-dismiss="modal">Cambiar a registro de usuario</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>