<?php
require_once 'conexion.php';
class quejas
{

    public $conexion;
    public $datos;

    public function __construct()
    {
        $this->conexion = new conexion();
    }
    public function registrar_queja($data)
    {
        $stmt = $this->conexion->conectar()->prepare("");
        $stmt->bindParam(":id_usuario", $data['id_usuario'], PDO::PARAM_STR);
        $stmt->bindParam(":queja", $data['queja'], PDO::PARAM_STR);
        $stmt->bindParam(":fecha", $data['fecha'], PDO::PARAM_STR);
        $stmt->bindParam(":hora", $data['hora'], PDO::PARAM_STR);
        $stmt->bindParam(":imagen", $data['imagen'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }

    //Muestra cuantas quejas a hecho cada usuario ,pasando como parametro el id
    public function queja_cliente($id_usuario)
    {
        $stmt = $this->conexion->conectar()->prepare("SELECT COUNT(*) as resultado FROM quejas WHERE id_usuario=:id_usuario");
        $stmt->bindParam(":id_usuario", $id_usuario, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }

    //Listar las quejas de los usuarios
    public function listar_quejas()
    {
        $stmt = $this->conexion->conectar()->prepare("
        SELECT * FROM quejas INNER JOIN cli_pro ON quejas.id_usuario=cli_pro.id_cli_pro WHERE condicion=1  ORDER BY estado");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }

    public function responder_queja($datos)
    {
        $stmt = $this->conexion->conectar()->prepare("UPDATE quejas SET respuesta=:respuesta , estado=1   WHERE id_queja=:id_queja");
        $stmt->bindParam(":id_queja", $datos['id_queja'], PDO::PARAM_STR);
        $stmt->bindParam(":respuesta", $datos['respuesta'], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }

    public function eliminar_queja($datos){
        $stmt = $this->conexion->conectar()->prepare("DELETE  FROM quejas WHERE id_queja=:id_queja");
        $stmt->bindParam(":id_queja", $datos['id_queja'], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
}
