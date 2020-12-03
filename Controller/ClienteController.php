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
class ClienteController
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


    //Ejemplo no funcional
    public function ver_articulo()
    {

        require_once 'view/cliente/index1.php';
        echo "";
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


    public function publicar()
    {
        require_once("view/cliente/publicar_producto.php");
    }
    public function Guardar_Producto()
    {
        if (!empty($_POST)) {

            //Para mover la imagen     
            $imagen1 = $_FILES['imagen1'];
            $imagen2 = $_FILES['imagen1'];
            $imagen3 = $_FILES['imagen1'];

            $datos['ruta_imagen1'] = base_url . $imagen1['imagen']['name'];
            move_uploaded_file($imagen1['imagen']['tmp_name'], $this->datos['ruta_imagen1']);

            $datos['ruta_imagen2'] = base_url . $imagen2['imagen']['name'];
            move_uploaded_file($imagen2['imagen']['tmp_name'], $this->datos['ruta_imagen2']);

            $datos['ruta_imagen3'] = base_url . $imagen3['imagen']['name'];
            move_uploaded_file($imagen3['imagen']['tmp_name'], $this->datos['ruta_imagen3']);

            $this->model_productos->registrar($this->datos);
        }
    }
}
