<?php
require_once 'model/conexion.php';
class enfermedad
{
    public $conexion;

    public function __construct()
    {
        $this->conexion = new conexion();
    }
    public function registrar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare("INSERT INTO enfermedad (nombre,descripcion,sintomas)values(:nombre,:descripcion,:sintomas)");
        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':nombre', $datos['descripcion'], PDO::PARAM_STR);
        $stmt->bindParam(':sintomas', $datos['sintomas'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }
    public function listar()
    {
        $stmt = $this->conexion->conectar()->prepare("SELECT * FROM enfermedad");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
    public function nueva_enfermedad($datos)
    {
        $stmt = $this->conexion->conectar()->prepare("INSERT INTO enfermedad (nombre,descripcion, sintomas)
        values(:nombre,:descripcion,:sintomas)");
        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':descripcion', $datos['descripcion'], PDO::PARAM_STR);
        $stmt->bindParam(':sintomas', $datos['sintomas'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }
}
