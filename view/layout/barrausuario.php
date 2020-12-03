<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url ?>assets/css/menu.css" type="text/css">
  <title>DREAM STORE</title>
</head>

<body>
 <nav class="navbar navbar-expand-lg bg-dark" id="may">
        <a class=" font-strong h4 text-white" href="#">DREAM STORE</a>
        <div class="container">
            <div class="float-left">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <nav class="navbar navbar-dark">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" id="buscar" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success text-white" type="submit ">Busqueda</button>
                    </form>

                </nav>
            </div>
            <div class="float-right">

                <div class="collapse navbar-collapse  navbar-right pl-2 " id="navbarNav">
                    <ul class="navbar-nav text-center">
                        <li class="nav-item active pl-2">
                            <svg class="bi bi-alert-triangle text-white" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            </svg>
                            <a class="nav-link text-white" href="#">Carrito</a>
                        </li>

                        <li class="nav-item active pl-2">
          <svg class="bi bi-alert-triangle text-white" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-bell-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
          </svg>
          <a class="nav-link text-white" href="#">Notificacion</a>
        </li>

                        <li class="nav-item active pl-2">
                            <svg class="bi bi-alert-triangle text-white" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-down-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                            </svg>
                            <a class="nav-link text-white" href="<?= base_url ?>cliente/compras">compras</a>
                        </li>

                        <li class="nav-item active pl-2">
          <svg class="bi bi-alert-triangle text-white" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-chat-quote-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766c.087.124.163.26.227.401.428.948.393 2.377-.942 3.706a.446.446 0 0 1-.612.01.405.405 0 0 1-.011-.59c.419-.416.672-.831.809-1.22-.269.165-.588.26-.93.26C4.775 9.333 4 8.587 4 7.667 4 6.747 4.776 6 5.734 6c.271 0 .528.06.756.166l.008.004c.169.07.327.182.469.324.085.083.161.174.227.272zM11 9.073c-.269.165-.588.26-.93.26-.958 0-1.735-.746-1.735-1.666 0-.92.777-1.667 1.734-1.667.271 0 .528.06.756.166l.008.004c.17.07.327.182.469.324.085.083.161.174.227.272.087.124.164.26.228.401.428.948.392 2.377-.942 3.706a.446.446 0 0 1-.613.01.405.405 0 0 1-.011-.59c.42-.416.672-.831.81-1.22z" />
          </svg>
          <a class="nav-link text-white" href="#">Chat</a>
        </li>

                        <li class="nav-item active pl-2">
                            <svg class="bi bi-alert-triangle text-white" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-basket3-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172z" />
                                <path d="M2.468 15.426L.943 9h14.114l-1.525 6.426a.75.75 0 0 1-.729.574H3.197a.75.75 0 0 1-.73-.574z" />
                            </svg>
                            <a class="nav-link text-white" href="<?= base_url ?>cliente/vender">Vender</a>
                        </li>

                        <li class="nav-item active pl-2">
                            <svg class="bi bi-alert-triangle text-white" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-person-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                            <a class="nav-link text-white" href="#">ANDREA</a>
                        </li>

                        
                        

                        <li class="nav-item active pl-2">
                            <svg class="bi bi-alert-triangle text-white" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-question-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033a.237.237 0 0 1-.24-.247C5.35 4.091 6.737 3.5 8.005 3.5c1.396 0 2.672.73 2.672 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.105a.25.25 0 0 1-.25.25h-.81a.25.25 0 0 1-.25-.246l-.004-.217c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.803 0-1.253.478-1.342 1.134-.018.137-.128.25-.266.25h-.825zm2.325 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z" />
                            </svg>
                            <a class="nav-link text-white" href="#">Ayuda</a>
                        </li>
                    </ul>
                </div>


            </div>
        </div>







    </nav>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Menu Principal</a></li>
            <li class="breadcrumb-item active" aria-current="page">Historial</li>
            <li class="breadcrumb-item active" aria-current="page">Historial Ultimo Mes</li>
        </ol>
    </nav>

    






</body>
