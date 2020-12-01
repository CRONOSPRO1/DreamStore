<?php
require_once('config/parameters.php');
require_once('model/model_usuario.php');
require_once('model/model_productos.php');
require_once('model/model_compras.php');
require_once('model/model_empresa.php');
require_once('model/model_ingresos.php');
require_once('model/model_mis_compras.php');
require_once('model/model_ventas.php');
require_once('model/model_quejas.php');
require_once('model/model_categorias.php');
require_once('assets/fpdf/fpdf.php');


class EmpresaController extends FPDF
{
    public $model_usuario;
    public $model_productos;
    public $model_compras;
    public $model_empresa;
    public $model_ingresos;
    public $model_miscompras;
    public $model_ventas;
    public $model_quejas;
    public $model_categorias;
    public $datos;




    public function __construct()
    {
        $this->model_usuario = new usuario();
        $this->model_productos = new productos();
        $this->model_compras = new compras();
        $this->model_empresa = new empresa();
        $this->model_ingresos = new ingresos();
        $this->model_miscompras = new mis_compras();
        $this->model_ventas = new ventas();
        $this->model_quejas = new quejas();
        $this->model_categorias = new categorias();
    
    }

    public function home(){
        require_once('view/Empresa/Home.php');
    }
    public function agendar(){
        
        require("view/Empresa/Agenda_Empresas.php");
    }
    public function editarproveedores(){
        require("view/Empresa/Editar_Proveedores.php");
    }
    public function editarusuarios(){
        require("view/Empresa/Editar_Usuarios.php");
    }
    public function nofitificacion(){
        require("view/Empresa/Notificacion.php");
    }

    public function productos(){
        $_SESSION['id']=1;
        require("view/Empresa/Productos_Empresa.php");
    }
    public function recibo(){
        require("view/Empresa/Recibo_Compras.php");
    }
    public function reportes(){
        require("view/Empresa/Reportes.php");
    }

    public function usuarios(){
        require("view/Empresa/Usuarios_Registrados.php");
    }
    public function ventas(){
        require("view/Empresa/Ventas_Empresa.php");
    }


}