<?php
require_once 'config/parameters.php';
require_once 'model/usuario.php';

class AdministradorController
{
    public $model_usuario;

    public function __construct()
    {
        $this->model_usuario = new usuario();
    }

    public function index()
    {
        require_once 'view/Administrador/Home.php';
    }
    public function usuarios()
    {
        require_once 'view/Administrador/Usuarios.php';
    }
    public function home()
    {
        require_once 'view/Administrador/Home.php';
    }
    public function Productos()
    {
        require_once 'view/Administrador/Productos.php';
    }
    public function Ventas()
    {
        require_once 'view/Administrador/Ventas.php';
    }
    public function Compras()
    {
        require_once 'view/Administrador/Compras.php';
    }
    public function Empresas()
    {
        require_once 'view/Administrador/home.php';
    }
    public function Editar_sitio()
    {
        require_once 'view/Administrador/home.php';
    }
    public function Sugerencias()
    {
        require_once 'view/Administrador/';
    }
    public function Quejas()
    {
        require_once 'view/Administrador/Quejas.php';
    }
    






}
