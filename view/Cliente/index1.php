<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=base_url?>assets/css/menu.css" type="text/css">
  <title>DREAM STORE</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand font-italic text-primary" href="#">DREAM STORE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <nav class="navbar navbar-light bg-dark">
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
      </form>
    </nav>

    <div class="collapse navbar-collapse aling-left ml-5 pl-2" id="navbarNav">
      <ul class="navbar-nav text-center">
        <li class="nav-item active pl-2">
          <svg class="bi bi-alert-triangle text-primary" width="1.8em" height="1.8em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
          </svg>
          <a class="nav-link text-white" href="#">Agregar al carro</a>
        </li>
        <li class="nav-item active pl-3">
          <svg class="bi bi-alert-triangle text-primary" width="32" height="32" viewBox="0 0 16 16" class="bi bi-bell-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
          </svg>
          <a class="nav-link text-white" href="#">Notificacion</a>
        </li>
        <li class="nav-item active pl-3">
          <svg class="bi bi-alert-triangle text-primary" width="32" height="32" viewBox="0 0 16 16" class="bi bi-arrow-down-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
          </svg>
          <a class="nav-link text-white" href="#">Mis compras</a>
        </li>
        <li class="nav-item active pl-3">
          <svg class="bi bi-alert-triangle text-primary" width="32" height="32" viewBox="0 0 16 16" class="bi bi-chat-quote-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766c.087.124.163.26.227.401.428.948.393 2.377-.942 3.706a.446.446 0 0 1-.612.01.405.405 0 0 1-.011-.59c.419-.416.672-.831.809-1.22-.269.165-.588.26-.93.26C4.775 9.333 4 8.587 4 7.667 4 6.747 4.776 6 5.734 6c.271 0 .528.06.756.166l.008.004c.169.07.327.182.469.324.085.083.161.174.227.272zM11 9.073c-.269.165-.588.26-.93.26-.958 0-1.735-.746-1.735-1.666 0-.92.777-1.667 1.734-1.667.271 0 .528.06.756.166l.008.004c.17.07.327.182.469.324.085.083.161.174.227.272.087.124.164.26.228.401.428.948.392 2.377-.942 3.706a.446.446 0 0 1-.613.01.405.405 0 0 1-.011-.59c.42-.416.672-.831.81-1.22z" />
          </svg>
          <a class="nav-link text-white" href="#">Chat</a>
        </li>
        <li class="nav-item active pl-3">
          <svg class="bi bi-alert-triangle text-primary" width="32" height="32" viewBox="0 0 16 16" class="bi bi-basket3-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172z" />
            <path d="M2.468 15.426L.943 9h14.114l-1.525 6.426a.75.75 0 0 1-.729.574H3.197a.75.75 0 0 1-.73-.574z" />
          </svg>
          <a class="nav-link text-white" href="#">Vender</a>
        </li>
        <li class="nav-item active pl-3">
          <svg class="bi bi-alert-triangle text-primary" width="32" height="32" viewBox="0 0 16 16" class="bi bi-stopwatch-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M6.5 0a.5.5 0 0 0 0 1H7v1.07A7.001 7.001 0 0 0 8 16 7 7 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm2 5.6a.5.5 0 1 0-1 0v2.9h-3a.5.5 0 0 0 0 1H8a.5.5 0 0 0 .5-.5V5.6z" />
          </svg>
          <a class="nav-link text-white" href="#">Historial</a>
        </li>
        <li class="nav-item active pl-3">
          <svg class="bi bi-alert-triangle text-primary" width="32" height="32" viewBox="0 0 16 16" class="bi bi-question-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033a.237.237 0 0 1-.24-.247C5.35 4.091 6.737 3.5 8.005 3.5c1.396 0 2.672.73 2.672 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.105a.25.25 0 0 1-.25.25h-.81a.25.25 0 0 1-.25-.246l-.004-.217c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.803 0-1.253.478-1.342 1.134-.018.137-.128.25-.266.25h-.825zm2.325 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z" />
          </svg>
          <a class="nav-link text-white" href="#">Ayuda</a>
        </li>
        <li class="nav-item active pl-3">
          <svg class="bi bi-alert-triangle text-primary" width="32" height="32" viewBox="0 0 16 16" class="bi bi-person-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
            <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
          </svg>
          <a class="nav-link text-white" href="#">Usuario</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="float-left w-10 p-10 bg-primary ">

      <div class="dropdown aling-left pl-0 my-0 py-0 text-left">
        <button class="btn btn-secondary dropdown-toggle text-body bg-warning text-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categoria
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
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


    <div class="float-righ w-90 p-90">

      <nav aria-label="breadcrumb m-5 p-5">
        <ol class="breadcrumb bg-transparent p-3 ">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item" aria-current="page">Data</li>
        </ol>
      </nav>



      <div class="container">

        <div id="carouselExampleSlidesOnly " class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?=base_url?>assets/img/nnn.jpg" class="d-block w-10" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?=base_url?>assets/img/nnn.jpg" class="d-block w-10" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?=base_url?>assets/img/nnn.jpg" class="d-block w-10 " alt="...">
            </div>
          </div>
        </div>



        <p class=" h2 text-center font-weight-bolder text-dark pl-2.5 my-2 py-2 ">Ofertas De La Semana</p>

        <div class="row mx-md-n5" id="fila">
          <div class="col px-md-6">
            <div class="p-5 border bg-light">
              <h6 class="text-center">XIAOMI REDMI NOTE 9 PRO</h6><img src="..." alt="..." class="img-thumbnail">
            </div>
          </div>
          <div class="col px-md-6">
            <div class="p-5 border bg-light">
              <h6 class="text-center">XIAOMI REDMI NOTE 9 PRO</h6><img src="<?=base_url?>assets/img/nnn.jpg" alt="..." class="img-thumbnail">
            </div>
          </div>
          <div class="col px-md-6">
            <div class="p-5 border bg-light">
              <h6 class="text-center">XIAOMI RED NOTE 9 PRO</h6><img src="..." alt="..." class="img-thumbnail">
            </div>
          </div>
          <div class="col px-md-6">
            <div class="p-5 border bg-light">
              <h6 class="text-center">XIAOMI RED NOTE 9 PRO</h6><img src="..." alt="..." class="img-thumbnail">
            </div>
          </div>
          <div class="col px-md-6">
            <div class="p-5 border bg-light">
              <h6 class="text-center">XIAOMI RED NOTE 9 PRO</h6><img src="..." alt="..." class="img-thumbnail">
            </div>
          </div>
        </div>
      </div>


      <div class="container">
        <p class=" h2 text-center font-weight-bolder text-dark pl-2.5 my-2 py-2 ">Mas Vendido</p>
        <div class="row mx-md-n5 bg-success">
          <div class="col px-md-7">
            <div class="p-5 border bg-light">
              <h6 class="text-center">XIAOMI RED NOTE 9 PRO</h6><img src="..." alt="..." class="img-thumbnail">
            </div>
          </div>
          <div class="col px-md-7">
            <div class="p-5 border bg-light">
              <h6 class="text-center">XIAOMI RED NOTE 9 PRO</h6><img src="..." alt="..." class="img-thumbnail">
            </div>
          </div>
          <div class="col px-md-7">
            <div class="p-5 border bg-light">
              <h6 class="text-center">XIAOMI RED NOTE 9 PRO</h6><img src="..." alt="..." class="img-thumbnail">
            </div>
          </div>
          <div class="col px-md-7">
            <div class="p-5 border bg-light">
              <h6 class="text-center">XIAOMI RED NOTE 9 PRO</h6><img src="..." alt="..." class="img-thumbnail">
            </div>
          </div>
          <div class="col px-md-7">
            <div class="p-5 border bg-light">
              <h6 class="text-center">XIAOMI RED NOTE 9 PRO</h6><img src="..." alt="..." class="img-thumbnail">
            </div>
          </div>
        </div>

        <div class="container">
          <p class=" h2 text-center font-weight-bolder text-dark pl-2.5 my-2 py-2 ">Te Puede Interesar</p>
          <div class="row mx-md-n5  bg-info">
            <div class="col px-md-7">
              <div class="p-5 border bg-light">
                <h6 class="text-center">XIAOMI RED NOTE 9 PRO</h6><img src="..." alt="..." class="img-thumbnail">
              </div>
            </div>
            <div class="col px-md-7">
              <div class="p-5 border bg-light">
                <h6 class="text-center">XIAOMI RED NOTE 9 PRO</h6><img src="..." alt="..." class="img-thumbnail">
              </div>
            </div>
            <div class="col px-md-7">
              <div class="p-5 border bg-light">
                <h6 class="text-center">XIAOMI RED NOTE 9 PRO</h6><img src="..." alt="..." class="img-thumbnail">
              </div>
            </div>
            <div class="col px-md-7">
              <div class="p-5 border bg-light">
                <h6 class="text-center">XIAOMI RED NOTE 9 PRO</h6><img src="..." alt="..." class="img-thumbnail">
              </div>
            </div>
            <div class="col px-md-7">
              <div class="p-5 border bg-light">
                <h6 class="text-center">XIAOMI RED NOTE 9 PRO</h6><img src="..." alt="..." class="img-thumbnail">
              </div>
            </div>
          </div>








        </div>









</body>

















<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>