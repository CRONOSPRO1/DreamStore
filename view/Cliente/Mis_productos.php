<?php require_once("view/layout/barrausuario.php") ?>
<div class="container text-center">
    <h3>Mis productos publicados</h3>
    <div class="float-right">
        <a href="<?=base_url?>Cliente/BorrarTodos" class="btn text-white bg-danger">Eliminar todos</a>
    </div>

</div>
<br>
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
                    <?php foreach ($this->model_productos->productos_usuario_mostrar($_SESSION['id_usuario']) as $row) : ?>
                        <div class="col-md-3">
                            <div class="card mb-4 shadow-sm ">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?= base_url . $row['imagen1'] ?>" widht="100%" height="200px" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?= base_url . $row['imagen2'] ?>" widht="100%" height="200px" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?= base_url . $row['imagen3'] ?>" widht="100%" height="200px" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>

                                <div class="card-body">
                                    <p class="card-text">Nombre: <?= $row['nombre_producto'] ?></p>
                                    <p class="card-text">Descripción: <?= $row['descripcion'] ?></p>
                                    <p class="card-text">Precio: <span class="text-success"><?= $row['precio'] ?></span></p>
                                    <p class="card-text">Direccion: <?= $row['direccion'] ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="<?=base_url?>Cliente/BorrarProducto?id=<?=$row['id_producto']?>" class="btn btn-sm btn-outline-danger">Eliminar</a>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
        </div>

        <hr>

    </div>



    <?php require_once 'view/layout/footer.php'; ?>