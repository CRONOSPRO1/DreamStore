<?php
require_once 'model/ciudadano.php';
require_once 'model/enfermedad.php';
require_once 'model/administrador.php';
class ciudadanoController
{
    public $model;
    public $model_enfermedad;
    public $datos;
    public $session;


    public function __construct()
    {
        $this->model = new ciudadano();
        $this->model_enfermedad = new enfermedad();
        $this->model_admin = new administrador();
        $this->session = session_start();
    }
    public function registrar()
    {
        if (!empty($_POST)) {
            $this->datos['nombres'] = $_POST['nombres'];
            $this->datos['apellidos'] = $_POST['apellidos'];
            $this->datos['identificacion'] = $_POST['identificacion'];
            $this->datos['pass'] = $_POST['pass'];
            $this->datos['pass'] = password_hash($this->datos['pass'], PASSWORD_BCRYPT);
            $resultado = $this->model->registrar($this->datos);
            if ($resultado = 1) {
                echo '<script>alert("Ya estas registrado,puedes iniciar sesion")</script>';
                require_once 'view/index.php';
            } else {
                echo '<script>alert("Credenciales incorrectas")</script>';
                require_once 'view/index.php';
            }
        }
    }
    public function validacion()
    {

        if ($_POST['rol'] == 1) {

            //Validacion para el administrador
            $identificacion = $_POST['identificacion'];
            $contrasena = $_POST['pass'];
            $resultado = $this->model_admin->validacion($identificacion);

            if (!empty($resultado)) {
                $verificacion = password_verify($contrasena, $resultado[0]['contrasena']);
                if ($verificacion == 1) {
               
                    $_SESSION['admin'] = $resultado[0]['Nombre'];

                    header('location:?c=administrador&a=enfermedades');
                } else {
                    echo '<script>alert("Contraseña incorrecta")</script>';
                    require_once 'view/index.php';
                }
            } else {
                echo '<script>alert("El numero de identificacion no esta registrado")</script>';
                require_once 'view/index.php';
            }
            echo 'escogio administrador';

            //Validacion para el ciudadano
        } elseif ($_POST['rol'] == 2) {
            $identificacion = $_POST['identificacion'];
            $contrasena = $_POST['pass'];
            $resultado = $this->model->validacion($identificacion);


            if (!empty($resultado)) {
                $verificacion = password_verify($contrasena, $resultado[0]['contrasena']);
                if ($verificacion == 1) {                 
                    $_SESSION['id'] = $resultado[0]['id_ciudadano'];
                    $_SESSION['usuario'] = $resultado[0]['nombres'];
                    require_once 'view/ciudadano/index.php';
                } else {
                    echo '<script>alert("Contraseña incorrecta")</script>';
                    require_once 'view/index.php';
                }
            } else {
                echo '<script>alert("El numero de identificacion no esta registrado")</script>';
                require_once 'view/index.php';
            }
        } else {
            echo '<script>alert("Debe seleccionar un rol")</script>';
            require_once 'view/index.php';
        } {
        }
    }
    public function vista_principal()
    {
        require_once 'view/ciudadano/index.php';
    }
    public function agregar_enfermedad()
    {
        require_once 'view/ciudadano/enfermedades.php';
    }
    public function registrar_enfermedades()
    {
        $cantidad = count($_POST['select']);
        $_POST['select'] = str_replace('"', '', $_POST['select']);
        $id = $_SESSION['id'];
        $i = 0;
        foreach ($_POST['select'] as $variable) {
            $this->model->registrar_enfermedad($id, $variable[$i]);
            $i = $i++;
        }
        require_once 'view/ciudadano/index.php';
    }
    public function cerrar()
    {
        unset($_SESSION['usuario']);
        unset($_SESSION['id']);
        require_once 'view/index.php';
    }
}
