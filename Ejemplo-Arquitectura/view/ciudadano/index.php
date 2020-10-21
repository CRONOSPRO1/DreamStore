<!doctype html>
<html lang="en">
<?php

if ($_SESSION['usuario']) {
} else {
    session_destroy();
    header('Location:?c=principal&a=index');
}

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS & Fontawwsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">

    <title>Datos personales | Sistema de registro de enfermedades</title>
</head>

<body>

<div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
            <a class="navbar-brand" href="?c=ciudadano&a=vista_principal">
                <img src="assets/img/logoweb_3.png" class="p-2" alt="SenaSoft 2020" width="100px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ml-3">
                        <a class="nav-link" href="#">
                            <span><i class="far fa-user mr-2"></i><?php echo $_SESSION['usuario'] ?></span>
                        </a>
                    </li>
                </ul>
                <div class="my-2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="text-dark a-menu" href="?c=ciudadano&a=vista_principal"><i class="fas fa-home mr-2"></i>Inicio</a></li>
                        <li class="nav-item"> <a href="?c=ciudadano&a=cerrar" class="text-muted a-menu"><i class="fas fa-sign-out-alt mr-2"></i>Cerrar session</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="card shadow-lg p-3 mb-3 bg-white rounded mt-4" style="max-width: 800px; margin: 0 auto;">
            <div class="card-body">
                <div class="card-title pb-2 text-center">
                    <h4 class="text-secondary">Información personal</h4>
                    <span>Información personal, y lista de enfermedades asociadas, puedes asociar una enfermedad</span>
                </div>
                <hr>
                <div class="container">
                    <ul class="list-group list-group-flush">
                        <?php foreach ($this->model->listar_usuario($_SESSION['id']) as $row) : ?>


                            <li class="list-group-item">Nombres <small class="float-right text-muted"><?= $row['nombres'] ?> </small></li>
                            <li class="list-group-item">Apellidos <small class="float-right text-muted"><?= $row['apellidos'] ?></small></li>
                            <li class="list-group-item">Identificacion<small class="float-right text-muted"><?= $row['numero_identificacion'] ?></small></li>
                            <li class="list-group-item">Enfermedades asociadas <ul class="float-right text-muted">
                                <?php endforeach; ?>
                                <?php foreach ($this->model->listar_datos($_SESSION['id']) as $row) : ?>
                                    <li><?= $row['nombre'] ?></li>
                                <?php endforeach; ?>



                                </ul>
                            </li>
                    </ul>
                </div>
                <hr>
                <div class="form-group mb-0 mt-2">
                    <a href="?c=ciudadano&a=agregar_enfermedad" class="form-control btn btn-dark">Agregar enfermedad</a>
                </div>
            </div>
        </div>

    </div>
    <?php require_once'view/layout/footer2.php';?>
    <!-- jQuery y Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>