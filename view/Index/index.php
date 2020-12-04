<?php require_once("view/layout/barra.php") ?>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="container w-75">
    <!--carrousel-->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?=base_url?>assets/img/4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?=base_url?>assets/img/1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?=base_url?>assets/img/accesorios.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!--Productos-->
<div class="container text-center">
<h3>Productos</h3>
</div>
<div class="container ">
    
    <ul class="list-inline">
        <?php foreach ($this->model_productos->listar_productos() as $row) : ?>
            <li class="list-inline-item mx-2 mt-3">
                <div class="card text-center" style="width: 12rem;">
                    <h5 class="card-title mt-2"><?= $row['nombre_producto'] ?></h5>
                    <a href="">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?= base_url ?><?= $row['imagen1'] ?>" height="130px" width="100%" class="d-block w-100 p-3" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= base_url ?><?= $row['imagen2'] ?>" height="130px" width="100%" class="d-block w-100 p-3" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= base_url ?><?= $row['imagen3'] ?>" height="130px" width="100%" class="d-block w-100 p-3" alt="...">
                                </div>
                            </div>
                        </div>
                    </a>
                    <p class="card-text">Bogota D.C</p>
                    <p class="card-text text-success">$35.000</p>
                    <a href="<?=base_url?>Principal/agregar?id=<?=$row['id_producto']?>" class="btn btn-primary">Agregar al carrito</a>
                </div>
            </li>
        <?php endforeach; ?>

    </ul>
</div>

<?php require_once 'view/layout/footerUsuario.php'; ?>
<?php require_once 'view/layout/footer.php'; ?>