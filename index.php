
<?php
require_once 'model/conexion.php';
require_once 'autoload.php';
require_once 'config/parameters.php';


//Para luego terminarlo
if (isset($_GET['controller']) && !isset($_GET['action'])) {
    $nombre_controlador = $_GET['controller'];
    $_GET['action'] = "index";

}
if (isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'] . 'Controller';
} elseif (!isset($_GET['controller'])  &&  !isset($_GET['action'])) {
    $nombre_controlador = controller_default;
    $_GET['action'] = "index";
} else {


    require_once'view/error.php';
    exit();
}
if (class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    } else {
        require_once'view/error.php';
    }
} else {
    require_once'view/error.php';
}

?>