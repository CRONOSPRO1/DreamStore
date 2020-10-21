<?php
class administrador
{
    public $conexion;

    public function __construct()
    {
        $this->conexion = new conexion;
    }
    /* public function registro($Nombre,$identificacion,$contrasena){
        $stmt=$this->conexion->conectar()->prepare("INSERT INTO administrador (nombre,identificacion,contrasena)VALUES
        (:nombre,:identificacion,:contrasena)");
        $stmt->bindParam(":nombre",$Nombre,PDO::PARAM_STR);
        $stmt->bindParam(":identificacion",$identificacion,PDO::PARAM_STR);
        $stmt->bindParam(":contrasena",$contrasena,PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }*/
    public function listar_ciudadanos()
    {
        $stmt = $this->conexion->conectar()->prepare("SELECT * FROM ciudadano");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }

    public function listar_ciudadanos_enfermedadaes($id_ciudadano_listar)
    {
        $stmt = $this->conexion->conectar()->prepare("SELECT enfermedad.nombre, enfermedad.sintomas FROM enfermedad 
            INNER JOIN enfermedades_ciudadadanos ON enfermedades_ciudadadanos.id_enfermedad = enfermedad.id 
            INNER JOIN ciudadano ON ciudadano.id_ciudadano = enfermedades_ciudadadanos.id_ciudadano 
            WHERE enfermedades_ciudadadanos.id_ciudadano = :idciudadano ORDER BY enfermedades_ciudadadanos.id DESC");
        $stmt->bindParam(':idciudadano',$id_ciudadano_listar, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }

    public function listar_enfermedadaes()
    {
        $stmt = $this->conexion->conectar()->prepare("SELECT * FROM enfermedad");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
    public function validacion($identificacion)
    {
        $stmt = $this->conexion->conectar()->prepare("SELECT * FROM administrador WHERE :identificacion");
        $stmt->bindParam(':identificacion', $identificacion, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
}
