<?php
require_once 'config/parameters.php';
require_once 'model/usuario.php';
require_once 'model/Productos.php';
require_once 'model/Compras.php';
require_once 'model/Empresa.php';
require_once 'model/Ingresos.php';
require_once 'model/Mis_compras.php';
require_once 'model/Ventas.php';
require_once 'model/Quejas.php';


class AdministradorController
{
    public $model_usuario;
    public $model_productos;
    public $model_compras;
    public $model_empresa;
    public $model_ingresos;
    public $model_MisCompras;
    public $model_ventas;
    public $model_quejas;



    public function __construct()
    {
        $this->model_usuario = new usuario();
        $this->model_productos = new productos();
        $this->model_compras = new compras();
        $this->model_empresa = new empresa();
        $this->model_ingresos = new ingresos();
        $this->model_MisCompras = new mis_compras();
        $this->model_ventas = new ventas();
        $this->model_quejas = new quejas();
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
