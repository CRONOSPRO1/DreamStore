<?php require_once("view/layout/barrausuario.php");?>
<div class="container w-75 aling p-3 m-3">
<p class=" h3 text-center font-weight-bolder text-dark pl-1 my-1 py-1 ">TV LENOVO</p>
<div id="carouselExampleIndicators" class="carousel slide bg-dark " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url ?>assets/img/cliente/producto1.jpg" height="350px" width="100%" class="d-block w-85 p-3" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url ?>assets/img/cliente/producto1.jpg" height="350px" width="100%" class="d-block w-85 p-3" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url ?>assets/img/cliente/producto1.jpg" height="350px" width="100%" class="d-block w-85 p-3" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container w-50 m-2">
<ul class="list-group">
  <li class="list-group-item"><a>Descripcion:</a> Televisor de 42 pulgas, smart tv conexion digital</li> 
  <li class="list-group-item"><a> Cantidad disponible:</a> 2</li>
  <li class="list-group-item"><a>Precio:</a> 850.000</li>
  <li class="list-group-item"><a href="<?= base_url ?>Principal/agregar?id=<?= $row['id_producto'] ?>" class="btn btn-primary">Agregar al carrito</a></li>
</ul>

<div class="container w-75">
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="..." class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
</div>

    






</div>












<?php require_once("view/layout/footer.php") ?>

