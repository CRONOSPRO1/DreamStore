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


class AdministradorController extends FPDF
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
        require_once 'view/Administrador/Empresas.php';
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


    public function recibo()
    {
        $id = $_POST['id'];
        $id_comprador = $_POST['id_comprador'];
        foreach ($this->model_usuario->datos_usuario($id_comprador) as $row) {
            $this->datos['nombre_comprador'] = $row['nombre'] . '' . $row['apellido'];
            $this->datos['telefono_comprador'] = $row['telefono'];
        }
        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Arial', '', 14);

        foreach ($this->model_compras->listar_compras($id) as $row) {
            $pdf->Cell(50, 14, 'Producto: ', 1, 0, 'L', 0);
            $pdf->Cell(65, 14, $row['nombre_producto'], 1, 1, 'L', 0);
            $this->Ln(10);
            $pdf->Cell(50, 14, 'Marca:', 1, 0, 'L', 0);
            $pdf->Cell(65, 14, $row['marca'], 1, 1, 'L', 0);
            $pdf->Cell(50, 14, 'ID  compra:', 1, 0, 'L', 0);
            $pdf->Cell(65, 14, $row['id_compra'], 1, 1, 'L', 0);
            $pdf->Cell(50, 14, 'Fecha Compra: ', 1, 0, 'L', 0);
            $pdf->Cell(65, 14, $row['fecha_venta'], 1, 1, 'L', 0);
            $pdf->Cell(50, 14, 'Precio: ', 1, 0, 'L', 0);
            $pdf->Cell(65, 14, '$' . $row['precio'], 1, 1, 'L', 0);
            $pdf->Cell(50, 14, 'Ciudad: ', 1, 0, 'L', 0);
            $pdf->Cell(65, 14, $row['ciudad'], 1, 1, 'L', 0);
            $pdf->Cell(50, 14, 'Nombre vendedor: ', 1, 0, 'L', 0);
            $pdf->Cell(65, 14, $row['nombre'] . ' ' . $row['apellido'], 1, 1, 'L', 0);
            $pdf->Cell(50, 14, 'Telefono vendedor: ', 1, 0, 'L', 0);
            $pdf->Cell(65, 14, $row['telefono'], 1, 1, 'L', 0);
            $pdf->Cell(50, 14, 'Email vendedor: ', 1, 0, 'L', 0);
            $pdf->Cell(65, 14, $row['email'], 1, 1, 'L', 0);
            $pdf->Cell(50, 14, 'Nombre comprador: ', 1, 0, 'L', 0);
            $pdf->Cell(65, 14, $this->datos['nombre_comprador'], 1, 1, 'L', 0);
            $pdf->Cell(50, 14, 'Telefono comprador: ', 1, 0, 'L', 0);
            $pdf->Cell(65, 14, $this->datos['telefono_comprador'], 1, 1, 'L', 0);
            $pdf->Image($row['imagen1'], 135, 100, 75);
        }

        $pdf->Output();
    }

    public function Responder()
    {
        $this->datos['id_queja']=$_POST['id_queja'];
        $this->datos['respuesta']=$_POST['respuesta'];
        $this->model_quejas->responder_queja($this->datos);
        echo 'href="javascript:void(0)" onclick="confirmacion';
        header('location:'.base_url.'Administrador/Quejas');
    }

    public function EliminarQueja(){
        $this->datos['id_queja']=$_GET['id'];
        $this->model_quejas->eliminar_queja($this->datos);
        header('location:'.base_url.'Administrador/Quejas');

    }
}
