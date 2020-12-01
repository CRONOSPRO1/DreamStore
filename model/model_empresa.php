<?php
require_once 'conexion.php';
class empresa
{
    public $conexion;
    private $año;

    public function __construct()
    {
        $this->conexion = new conexion();
        $this->año = date('Y');
    }

    public function listar_empresas()
    {
        $stmt = $this->conexion->conectar()->prepare("SELECT * FROM cli_pro where rol='empresa' and condicion=1 ");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }

    //Para contar las empresas registradas
    public function usuarios_registrados()
    {
        $stmt = $this->conexion->conectar()->prepare("SELECT COUNT(*) AS resultado FROM cli_pro WHERE condicion=1 and rol='empresa' ");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }

    public function empresas_nuevas_año($mes){
        $stmt=$this->conexion->conectar()->prepare("SELECT COUNT(*) AS cantidad FROM cli_pro WHERE YEAR(fecha_registro)=$this->año  AND MONTH(fecha_registro)=:mes AND rol='empresa' ");
        $stmt->bindParam(":mes",$mes,PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
}
