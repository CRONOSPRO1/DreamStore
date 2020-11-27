<?php
require_once'model/usuario.php';
class ClienteController{

    public $model_usuario;
    public $datos;

    public function __construct(){
        $this->model_usuario= new usuario;
    }

    public function ver_articulo(){
        require_once'view/cliente/ver_articulos.php';
    
    }
    
    public function Guardar_Producto(){
        if (!empty($_POST)) {

            //Para mover la imagen     
            $imagen1=$_FILES['imagen1'];    
            $imagen2=$_FILES['imagen1'];    
            $imagen3=$_FILES['imagen1'];    

            $datos['ruta_imagen1']=base_url.$imagen1['imagen']['name'];
            move_uploaded_file($imagen1['imagen']['tmp_name'],$this->datos['ruta_imagen1']);

            $datos['ruta_imagen2']=base_url.$imagen2['imagen']['name'];
            move_uploaded_file($imagen2['imagen']['tmp_name'],$this->datos['ruta_imagen2']);

            $datos['ruta_imagen3']=base_url.$imagen3['imagen']['name'];
            move_uploaded_file($imagen3['imagen']['tmp_name'],$this->datos['ruta_imagen3']);

        

            $this->model_productos->registrar($this->datos);

        }
    }

  

}





?>