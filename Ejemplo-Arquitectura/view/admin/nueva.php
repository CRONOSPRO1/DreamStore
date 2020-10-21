<!doctype html>
<html lang="en">
<?php

if ($_SESSION['admin']) {
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

    <title>Agregar enfermedad | Sistema de registro de enfermedades</title>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
            <a class="navbar-brand" href="?c=administrador&a=enfermedades">
                <img src="assets/img/logoweb_3.png" class="p-2" alt="SenaSoft 2020" width="100px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ml-3">
                        <a class="nav-link" href="#">
                            <span><i class="far fa-user mr-2"></i><?php echo $_SESSION['admin'] ?></span>
                        </a>
                    </li>
                </ul>
                <div class="my-2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="text-dark a-menu" href="?c=administrador&a=ciudadanos"><i class="fas fa-users mr-2"></i>Ciudadanos</a></li>
                        <li class="nav-item"><a class="text-dark a-menu" href="?c=administrador&a=enfermedades"><i class="fas fa-skull mr-2"></i>Enfermedades</a></li>
                        <li class="nav-item"><a class="text-muted a-menu" href="?c=administrador&a=cerrar"><i class="fas fa-sign-out-alt mr-2"></i>Cerrar Sesion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    <div class="container">
        <div class="card shadow-lg p-3 mb-3 bg-white rounded mt-4" style="max-width: 800px; margin: 0 auto;">
            <div class="card-body">
                <div class="card-title pb-2 text-center">
                    <h4 class="text-secondary">Agregar enfermedad</h4>
                </div>
                <form action="?c=administrador&a=nueva" method="POST">
                    <div class="form-row">
                        <div class="col-md-6 mb-3 pr-4">
                            <label>Nombre de la enfermedad</label>
                            <input type="text" name="nombre" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3 pr-4">
                            <label>Descripción</label>
                            <textarea type="text" name="descripcion" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <!-- <div class="col-md-6 mb-3 pr-4">
                            <label>Peligrosidad</label>
                            <select class="custom-select" required>
                                <option selected disabled value=""> </option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div> -->
                        <div class="col-md-6 mb-3 pr-4">
                            <label>Sintomas</label>
                            <textarea class="form-control" name="sintomas" required>   </textarea>
                        </div>

                    </div>
                    <div class="form-row mt-4  pr-4">
                        <div class="col-md-6 mb-3 pr-4">
                            <a href="?c=administrador&a=enfermedades" class="btn btn-light form-control">Cancelar</a>
                        </div>
                        <div class="col-md-6 mb-3  pr-4">
                            <input class="btn btn-dark form-control" type="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <?php require_once'view/layout/footer2.php';?>
    <!-- jQuery y Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>