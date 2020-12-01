<?php
require_once 'conexion.php';
class mis_compras
{

    public $conexion;
    private $año;

    public function __construct()
    {
        $this->conexion = new conexion();
        $this->año = date('Y');
    }

    //Metodo para mostrar cuantas compras ha hecho un usuario
    public function Compras_usuario($id_usuario)
    {
        $stmt = $this->conexion->conectar()->prepare("SELECT COUNT(*) as resultado FROM mis_compras WHERE id_comprador=:id_usuario;");
        $stmt->bindParam(":id_usuario", $id_usuario, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }


    /*Muestra la cantidad de compras realizadas*/
    public function Compras_totales()
    {
        $stmt = $this->conexion->conectar()->prepare("SELECT COUNT(*) AS resultado FROM mis_compras ");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
    
    //Muestra todos los datos de las compras realizadas
    public function listar_compras(){
        $stmt = $this->conexion->conectar()->prepare("
        SELECT * FROM mis_compras 
        INNER JOIN productos ON mis_compras.idProducto=productos.id_producto 
        INNER JOIN cli_pro ON productos.id_vendedor=cli_pro.id_cli_pro WHERE condicion=1");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }

    //Datos para mostrar en la grafica
    public function compras_año($mes){
        $stmt = $this->conexion->conectar()->prepare("SELECT COUNT(*) as cantidad FROM mis_compras WHERE YEAR(fecha_venta)=$this->año AND MONTH(fecha_venta)=:mes");
        $stmt->bindParam(":mes", $mes, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }

    

}
