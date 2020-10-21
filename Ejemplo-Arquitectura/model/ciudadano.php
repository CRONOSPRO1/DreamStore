<?php
require_once 'model/conexion.php';
class ciudadano
{

    public $conexion;

    public function __construct()
    {
        $this->conexion = new conexion();
    }

    public function registrar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare("INSERT INTO ciudadano (numero_identificacion,nombres,apellidos,contrasena)
        values(:numero_identificacion,:nombres,:apellidos,:contrasena)");
        $stmt->bindParam(':nombres', $datos['nombres'], PDO::PARAM_STR);
        $stmt->bindParam(':apellidos', $datos['apellidos'], PDO::PARAM_STR);
        $stmt->bindParam(':numero_identificacion', $datos['identificacion'], PDO::PARAM_STR);
        $stmt->bindParam(':contrasena', $datos['pass'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }
    public function registrar_enfermedad($id_ciudadano, $id_enfermedad)
    {
        $stmt = $this->conexion->conectar()->prepare("INSERT INTO enfermedades_ciudadadanos (id_ciudadano,id_enfermedad) VALUES (:id_ciudadano,:id_enfermedad)");
        $stmt->bindParam(":id_ciudadano", $id_ciudadano, PDO::PARAM_INT);
        $stmt->bindParam(":id_enfermedad", $id_enfermedad, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function validacion($identificacion)
    {
        $stmt = $this->conexion->conectar()->prepare("SELECT numero_identificacion,contrasena,id_ciudadano,nombres FROM ciudadano 
        WHERE  numero_identificacion=:identificacion ");
        $stmt->bindParam(':identificacion', $identificacion, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
    public function listar()
    {
        $stmt = $this->conexion->conectar()->prepare("SELECT * FROM ciudadano");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
    public function listar_usuario($usuario)
    {
        $stmt = $this->conexion->conectar()->prepare("SELECT * FROM ciudadano where id_ciudadano=:usuario");
        $stmt->bindParam(":usuario", $usuario, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
    public function listar_datos($usuario)
    {
        $stmt = $this->conexion->conectar()->prepare("SELECT enfermedad.id, enfermedad.nombre FROM enfermedad 
            INNER JOIN enfermedades_ciudadadanos ON enfermedades_ciudadadanos.id_enfermedad = enfermedad.id 
            INNER JOIN ciudadano ON ciudadano.id_ciudadano = enfermedades_ciudadadanos.id_ciudadano 
            WHERE enfermedades_ciudadadanos.id_ciudadano = :usuario ORDER BY enfermedades_ciudadadanos.id DESC");
        $stmt->bindParam(":usuario", $usuario, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
}
