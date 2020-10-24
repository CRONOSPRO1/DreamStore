<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Sistema de registro de enfermedades</title>
</head>

<body id="container-fluid">
    <div class="container mt-4 pt-4">
        <div class="card text-center shadow-lg p-3 mb-3 bg-white rounded mt-4" style="max-width: 400px; margin: 0 auto;">
            <div class="card-body">
                <div class="card-title pb-4">
                    <img src="assets/img/logoweb_3.png" alt="SenaSoft 2020" width="100px">
                </div>
                <form action="?c=ciudadano&a=validacion" method="POST">
                    <div class="form-group">
                        <select name="rol" class="form-control" id="">
                            <option value="">Rol</option>
                            <option value="1">Administrador</option>
                            <option value="2">Ciudadano</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="identificacion" placeholder="Numero de identificacion" required>
                    </div>
                    <div class="form-group pb-1">
                        <input type="password" class="form-control" name="pass" placeholder="Contraseña" required>
                    </div>
                    <input type="submit" class="form-control btn btn-dark" value="Iniciar sesión">
                </form>
            </div>
        </div>

        <div class="card text-center shadow-lg p-3 mb-5 bg-white rounded" style="max-width: 400px; margin: 0 auto;">
            <div class="card-body">
                <span>¿No tienes una cuenta?</span>
                <a href="?c=principal&a=registrarse">Registrarse</a>
            </div>
        </div>

    </div>
    <?php require_once'layout/footer2.php';?>
    <!-- jQuery y Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>