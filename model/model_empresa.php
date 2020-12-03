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
    public function registrar_empresa($data)
    {
        $stmt = $this->conexion->conectar()->prepare("INSERT INTO cli_pro
        (
            nombre,
            numero_identificacion,
            tipo_identificacion,
            direccion,
            ciudad,
            email,
            pass,
            telefono,
            imagen,
            rol
        )
        values(
            :nombre,
            :numero_identificacion,
            :tipo_identificacion,
            :direccion,
            :ciudad,
            :email,
            :pass,
            :telefono,
            :imagen,
            :rol
            )");
        $stmt->bindParam(":nombre", $data['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(":numero_identificacion", $data['identificacion'], PDO::PARAM_STR);
        $stmt->bindParam(":tipo_identificacion", $data['tipo_identificacion'], PDO::PARAM_INT);
        $stmt->bindParam(":direccion", $data['direccion'], PDO::PARAM_STR);
        $stmt->bindParam(":ciudad", $data['ciudad'], PDO::PARAM_STR);
        $stmt->bindParam(":email", $data['email'], PDO::PARAM_STR);
        $stmt->bindParam(":pass", $data['pass'], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $data['telefono'], PDO::PARAM_INT);
        $stmt->bindParam(":imagen", $data['imagen'], PDO::PARAM_STR);
        $stmt->bindParam(":rol", $data['rol'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function listar_empresas()
    {
        $stmt = $this->conexion->conectar()->prepare("SELECT * FROM cli_pro where rol='empresa' and condicion=1 ");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }

    //Para contar las empresas registradas
    public function empresas_registradas()
    {
        $stmt = $this->conexion->conectar()->prepare("SELECT COUNT(*) AS resultado FROM cli_pro WHERE condicion=1 and rol='empresa' ");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }

    public function empresas_nuevas_año($mes)
    {
        $stmt = $this->conexion->conectar()->prepare("SELECT COUNT(*) AS cantidad FROM cli_pro WHERE YEAR(fecha_registro)=$this->año  AND MONTH(fecha_registro)=:mes AND rol='empresa' ");
        $stmt->bindParam(":mes", $mes, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
}
