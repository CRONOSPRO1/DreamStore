<?php require_once("view/layout/barrausuario.php"); ?>
<div class="float-righ w-90 p-90">
  <div class="container">
    <div class="float-left w-10 p-10 bg-dark ">

      <div class="dropdown aling-left pl-0 my-0 py-0 text-left">
        <button class="btn btn-secondary dropdown-toggle text-body" id="categoria" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categoria
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="clase">
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



    <div class="float-righ w-95 -95">

      <div class="container">
        <p class=" h2 text-center font-weight-bolder text-dark pl-3 my-3 py-3 ">Ofertas De La Semana</p>
        <!--Productos-->
        <div class="container ">
          <ul class="list-inline">
            <?php foreach ($this->model_productos->listar_productos() as $row) : ?>
              <li class="list-inline-item mx-2 mt-3">
                <div class="card text-center" style="width: 12rem;">
                  <h5 class="card-title mt-2"><?= $row['nombre_producto'] ?></h5>
                  <a href="<?= base_url?>Cliente/verproducto">
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
                  <a href="<?= base_url ?>Principal/agregar?id=<?= $row['id_producto'] ?>" class="btn btn-primary">Agregar al carrito</a>
                </div>
              </li>
            <?php endforeach; ?>

          </ul>
        </div>

        <div class="container">
          <p class=" h2 text-center font-weight-bolder text-dark pl-3 my-3 py-3 ">Mas Vendidos</p>
          <!--Productos-->
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
                    <a href="<?= base_url ?>Principal/agregar?id=<?= $row['id_producto'] ?>" class="btn btn-primary">Agregar al carrito</a>
                  </div>
                </li>
              <?php endforeach; ?>

            </ul>
          </div>


          <div class="container">
            <p class=" h2 text-center font-weight-bolder text-dark pl-3 my-3 py-3 ">Mis Favoritos</p>
            <!--Productos-->
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
                      <a href="<?= base_url ?>Principal/agregar?id=<?= $row['id_producto'] ?>" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                  </li>
                <?php endforeach; ?>

              </ul>
            </div>

            <?php require_once("view/layout/footer.php") ?>