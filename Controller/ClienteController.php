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


class ClienteController extends FPDF
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
    public $resultado;



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


    //Ejemplo no funcional
    public function index()
    {
        require_once 'view/cliente/index1.php';
    }
    public function vender()
    {
        require_once 'view/cliente/vender.php';
    }

    public function compras()
    {
        require_once 'view/cliente/compras.php';
    }

    public function verproducto()
    {
        require_once 'view/cliente/verproducto.php';
    }
    public function carrito()
    {
        require_once 'view/cliente/carrito.php';
    }
    public function MisProductos(){
        require_once 'view/cliente/Mis_productos.php';
    }
    public function publicar()
    {
        require_once("view/cliente/publicar_producto.php");
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
        header("location:". base_url . "Cliente/MisProductos");

        //$this->model_productos->registrar($this->datos);

    }
    public function agregar()
    {
        if ($_GET['id']) {
            $id = $_GET['id'];
            $_SESSION['carro_prueba'][] = $id;
        }

        header("location:" . base_url . "Cliente/Index");
    }

    public function borrarTodos()
    {
        unset($_SESSION['carro_prueba']);
        header("location:" . base_url . "Cliente/carrito");
    }
    public function BorrarUno()
    {
        $id = $_GET['id'];
        echo $id;
        var_dump($_SESSION['carro_prueba']);
        unset($_SESSION['carro_prueba'][$id]);
        header("location:" . base_url . "Cliente/carrito");
    }

    public function CerrarSesion()
    {
        session_destroy();
        echo "cerrar";
        header("location:" . base_url . "Cliente/Index");
    }
    public function BorrarProducto(){
        $id=$_GET['id'];
        $this->model_productos->eliminar_productos($id);
        header("location:".base_url."Cliente/MisProductos");
    }

    public function Queja(){
        $this->datos['queja']=$_POST['queja'];
        $this->datos['id_usuario']=$_POST['id_usuario'];
        $this->model_quejas->registrar_queja($this->datos);
        header("location:".base_url."Cliente/Index");
    }
}
