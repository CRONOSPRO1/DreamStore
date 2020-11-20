<?php
require_once 'conexion.php';
class quejas{
    
    public function __construct()
    {
        $this->conexion=new conexion();
    
    }
    public function registrar_queja($data){
        $stmt=$this->conexion->conexion()->prepare("");
        $stmt->bindParam(":id_usuario",$data['id_usuario'],PDO::PARAM_STR);
        $stmt->bindParam(":queja",$data['queja'],PDO::PARAM_STR);
        $stmt->bindParam(":fecha",$data['fecha'],PDO::PARAM_STR);
        $stmt->bindParam(":hora",$data['hora'],PDO::PARAM_STR);
        $stmt->bindParam(":imagen",$data['imagen'],PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }

    //Muestra cuantas quejas a hecho cada usuario ,pasando como parametro el id
    public function queja_cliente($id_usuario){
        $stmt=$this->conexion->conexion()->prepare("SELECT COUNT(*) as resultado FROM quejas WHERE id_usuario=:id_usuario");
        $stmt->bindParam(":id_usuario",$id_usuario,PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
}


?>