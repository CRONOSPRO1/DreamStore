<?php
require_once 'conexion.php';
class ventas
{

    public $conexion;
    private $año;

    public function __construct()
    {
        $this->conexion = new conexion();
        $this->año = date('Y');
    }
    public function ventas_usuario($id_usuario)
    {
        $stmt = $this->conexion->conectar()->prepare("
        SELECT count(*) as resultado FROM mis_compras 
        INNER JOIN productos On mis_compras.idProducto=productos.id_producto 
        INNER JOIN cli_pro On productos.id_vendedor=cli_pro.id_cli_pro WHERE id_cli_pro=:id_usuario");
        $stmt->bindParam(":id_usuario", $id_usuario, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }

    //Muestra las ventas totales 
    public function ventas_totales()
    {
        $stmt = $this->conexion->conectar()->prepare("SELECT count(*) as resultado FROM mis_compras");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }

    //Muestra las ventas totales 
    public function ventas_empresa($id_empresa,$mes)
    {
        $stmt = $this->conexion->conectar()->prepare("
        SELECT count(*) as cantidad FROM mis_compras 
        INNER JOIN productos On mis_compras.idProducto=productos.id_producto 
        INNER JOIN cli_pro On productos.id_vendedor=cli_pro.id_cli_pro 
        WHERE id_vendedor=:id_empresa AND YEAR(fecha_venta)=$this->año  AND MONTH(fecha_venta)=:mes");
        $stmt->bindParam(":id_empresa", $id_empresa, PDO::PARAM_STR);
        $stmt->bindParam(":mes", $mes, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
}
