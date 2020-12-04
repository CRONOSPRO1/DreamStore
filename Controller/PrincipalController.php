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


class PrincipalController extends FPDF
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

    public function index()
    {
        require_once 'view/Index/index.php';

    }
    public function carrito(){
        require_once("view/Index/carrito.php");
    }
    public function validar()
    {

        $this->datos['identificacion'] = $_POST['identificacion'];
        $this->datos['pass'] = $_POST['pass'];
        $this->resultado = $this->model_usuario->validar($this->datos);

        if (!empty($this->resultado)) {
            echo  $verificacion = password_verify($this->datos['pass'], $this->resultado[0]['pass']);

            if ($verificacion == 1) {
                //Si es usuario
                echo"AQQ";
                if ($this->resultado[0]['rol'] == "usuario") {
                    $_SESSION['id_usuario'] = $this->resultado[0]['id_cli_pro'];
                    $_SESSION['nombre_usuario'] = $this->resultado[0]['nombre'];
                    $_SESSION['imagen_usuario']=$this->resultado[0]['imagen'];
                    header("location:" . base_url . "Cliente/Index");
                }
                //Si es empresa
                if ($this->resultado[0]['rol'] == "empresa") {
                    $_SESSION['id_empresa'] = $this->resultado[0]['id_cli_pro'];
                    $_SESSION['nombre_empresa'] = $this->resultado[0]['nombre'];
                    $_SESSION['imagen_empresa']=$this->resultado[0]['imagen'];
                    header("location:" . base_url . "Empresa/Index");
                }
                //Si es administrar
                if ($this->resultado[0]['rol'] == "administrador") {
                    $_SESSION['id_administrador'] = $this->resultado[0]['id_cli_pro'];
                    $_SESSION['nombre_administrador'] = $this->resultado[0]['nombre'];
                    $_SESSION['imagen_administrador']=$this->resultado[0]['imagen'];
                    header("location:" . base_url . "Administrador/Usuarios");
                }
            }
        }else{
            echo '<script>alert("Contraseña incorrecta")</script>';
            header("location:".base_url."Principal/index");
        }
        
    }

    //Registrar usuarios
    public function registrar()
    {
        $this->data['rol'] = $_POST['rol'];
        $this->data['nombre'] = $_POST['nombre'];
        $this->data['email'] = $_POST['email'];
        $this->data['identificacion'] = $_POST['identificacion'];
        $this->data['tipo_identificacion'] = $_POST['tipo_identificacion'];
        $this->data['ciudad'] = $_POST['ciudad'];
        $this->data['direccion'] = $_POST['direccion'];
        $this->data['telefono'] = $_POST['telefono'];

        //Encriptar la contraseña
        $this->data['pass'] = $_POST['pass'];
        $this->data['pass'] = password_hash($this->data['pass'], PASSWORD_BCRYPT);

        //Tomo la imagen y la muevo a la ruta del proyecto y guardo la url
        $imagen = $_FILES['imagen'];
        $this->data['imagen'] = 'assets/img/' . $imagen['name'];
        move_uploaded_file($imagen['tmp_name'], $this->data['imagen']);

        //Condiciones para registrar dependiendo el tipo de rol
        if ($this->data['rol'] == "usuario") {
            $this->data['apellido'] = $_POST['apellido'];
            $this->resultado = $this->model_usuario->registrar_usuario($this->data);
            header("location:" . base_url . 'Principal/Index');
            echo "<script>alert('Usuario registrado, ya puedes iniciar sesion')</script>";
        } elseif ($this->data['rol'] == "empresa") {
            $this->resultado = $this->model_empresa->registrar_empresa($this->data);
            echo "<script>alert('Empresa registrada, ya puedes iniciar sesion')</script>";
            header("location:" . base_url . 'Principal/Index');
        }
    }

    public function agregar()
    {
        if ($_GET['id']) {
            $id=$_GET['id'];
            $_SESSION['carro_prueba'][]=$id;
        }
        
        header("location:".base_url."Principal/Index");
    }

    public function borrarTodos(){
       unset($_SESSION['carro_prueba']);
       header("location:".base_url."Principal/carrito");
    }
    public function BorrarUno(){
        $id=$_GET['id'];
        echo $id;
        var_dump($_SESSION['carro_prueba']);
        unset($_SESSION['carro_prueba'][$id]);
        header("location:".base_url."Principal/carrito");
    }

    public function cerrarSesion(){
        session_destroy();
        echo "cerrar";
        header("location:".base_url."Principal/Index");
    }


    


}
