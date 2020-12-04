<?php
session_start();
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

    public function Index(){
        require_once('view/Empresa/Productos_Empresa.php');
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
        $_SESSION['id_empresa']=1;
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


    public function eliminar_producto(){
        $id_producto=$_GET['id'];
        echo $id_producto;
       $this->model_productos->eliminar_productos($id_producto);

        header("location:".base_url.'Empresa/productos');
    }

    public function CerrarSesion()
    {
        session_destroy();
        header("location:" . base_url . "Principal/Index");
    }

    public function Guardar_Producto()
    {
        $this->datos['nombre_producto'] = $_POST['nombre_producto'];
        $this->datos['descripcion'] = $_POST['descripcion'];
        $this->datos['cantidad'] = $_POST['cantidad'];
        $this->datos['ciudad'] = $_POST['ciudad'];
        $this->datos['categoria'] = $_POST['categoria'];
        $this->datos['precio'] = $_POST['precio'];
        $this->datos['marca'] = $_POST['marca'];
        $this->datos['fecha'] = $_POST['fecha'];
        $this->datos['id_vendedor'] = $_POST['id_vendedor'];

        //Para mover la imagen     
        $imagen1 = $_FILES['imagen1'];
        $imagen2 = $_FILES['imagen2'];
        $imagen3 = $_FILES['imagen3'];

        $this->datos['imagen1'] = 'assets/img/' . $imagen1['name'];
        move_uploaded_file($imagen1['tmp_name'], $this->datos['imagen1']);

        $this->datos['imagen2'] = 'assets/img/' . $imagen2['name'];
        move_uploaded_file($imagen2['tmp_name'], $this->datos['imagen2']);

        $this->datos['imagen3'] = 'assets/img/' . $imagen3['name'];
        move_uploaded_file($imagen3['tmp_name'], $this->datos['imagen3']);


        $this->model_productos->registrar($this->datos);
        header("location:". base_url . "Empresa/Index");

        //$this->model_productos->registrar($this->datos);

    }


}