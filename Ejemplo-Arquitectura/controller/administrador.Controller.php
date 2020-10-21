<?php
require_once 'model/administrador.php';
require_once 'model/enfermedad.php';
class administradorController
{
    public $modelo_enfermedad;
    public $datos;
    public $session;


    public function __construct()
    {
        $this->modelo_enfermedad = new enfermedad();
        $this->model = new administrador();
        $this->session = session_start();
    }
    public function nueva()
    {
        if (!empty($_POST)) {
            $this->datos['nombre'] = $_POST['nombre'];
            $this->datos['descripcion'] = $_POST['descripcion'];
            $this->datos['sintomas'] = $_POST['sintomas'];

            $resultado = $this->modelo_enfermedad->nueva_enfermedad($this->datos);
            if ($resultado = 1) {
                require_once 'view/admin/index.php';
            } else {
                echo '<script>alert("Credenciales incorrectas")</script>';
                require_once 'view/admin/index.php';
            }
        }
    }

    public function nueva_enfermedad()
    {
        require_once 'view/admin/nueva.php';
    }

    public function enfermedades()
    {
        require_once 'view/admin/index.php';
    }

    public function ciudadanos()
    {
        require_once 'view/admin/ciudadanos.php';
    }
    public function cerrar()
    {
        unset($_SESSION['admin']);
        header('location:?c=principal&a=index');
    }
}
