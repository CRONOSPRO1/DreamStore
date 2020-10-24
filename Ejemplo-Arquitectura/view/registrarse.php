<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">

    <title>Registrarse | Sistema de registro de enfermedades</title>
</head>

<body class="bg-light" >
    <div class="container mt-4 pt-2">
        <div class="card text-center shadow-lg p-3 mb-3 bg-white rounded mt-4" style="max-width: 400px; margin: 0 auto;">
            <div class="card-body">
                <div class="card-title pb-4">
                    <img src="assets/img/logoweb_3.png" class=" pb-4" alt="SenaSoft 2020" width="100px">
                    <h4 class="text-secondary">Registrarse para controlar las posibles enfermedades</h4>
                </div>
                <form action="?c=ciudadano&a=registrar" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nombres" placeholder="Nombres completos" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="apellidos" placeholder="Apellidos completos" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="identificacion" placeholder="Numero de identificación" required>
                    </div>
                    <div class="form-group pb-1">
                        <input type="password" class="form-control" name="pass" placeholder="Contraseña" required>
                    </div>
                    <input type="submit" class="form-control btn btn-dark" value="Registrarse">
                </form>
            </div>
        </div>

        <div class="card text-center shadow-lg p-3 mb-5 bg-white rounded" style="max-width: 400px; margin: 0 auto;">
            <div class="card-body">
                <span>¿Tienes una cuenta?</span>
                <a href="?c=principal&a=index">Iniciar sesión</a>
            </div>
        </div>

    </div>
    <?php require_once'layout/footer2.php';?>
    <!-- jQuery y Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>