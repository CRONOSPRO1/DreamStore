<?php
require_once 'model/conexion.php';
class usuario
{

    public $conexion;

    public function __construct()
    {
        $this->conexion = new conexion();
    }

    public function listar_usuarios()
    {
        $stmt = $this->conexion->conectar()->prepare("SELECT * FROM cli_pro where rol='usuario' and condicion=1 ");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
    public function registrar_usuario($data)
    {
        $stmt = $this->conexion->conectar()->prepare("INSERT INTO cli_pro
        (
            nombre,
            apellido,
            numero_identificacion,
            tipo_identificacion,
            direccion,
            ciudad,
            email,
            pass,
            telefono,
            imagen,
            rol,
            fecha_registro
        )
        values(
            :nombre,
            :apellido,
            :numero_identificacion,
            :tipo_identificacion,
            :direccion,
            :ciudad,
            :email,
            :pass,
            :telefono,
            :imagen,
            :rol,
            :fecha_registro
            )");
        $stmt->bindParam(":nombre", $data['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(":apellido", $data['apellido'], PDO::PARAM_STR);
        $stmt->bindParam(":numero_identificacion", $data['numero_identificacion'], PDO::PARAM_STR);
        $stmt->bindParam(":tipo_identificacion", $data['tipo_identificacion'], PDO::PARAM_STR);
        $stmt->bindParam(":direccion", $data['direccion'], PDO::PARAM_STR);
        $stmt->bindParam(":ciudad", $data['ciudad'], PDO::PARAM_STR);
        $stmt->bindParam(":email", $data['email'], PDO::PARAM_STR);
        $stmt->bindParam(":pass", $data['pass'], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $data['telefono'], PDO::PARAM_STR);
        $stmt->bindParam(":imagen", $data['imagen'], PDO::PARAM_STR);
        $stmt->bindParam(":rol", $data['rol'], PDO::PARAM_STR);
        $stmt->bindParam(":fecha_registro", $data['fecha_registro'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function eliminar_usuario($id_usuario)
    {
        $stmt = $this->conexion->conectar()->prepare("DELETE * FROM cli_pro where id_cli_pro=:id_usuario");
        $stmt->bindParam(":id_usuario", $id_usuario, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }
    public function actualizar_usuario($data)
    {
        $stmt = $this->conexion->conectar()->prepare("UPDATE cli_pro set 
            nombre=:nombre,
            apellido=:apellido,
            direccion=:direccion,
            ciudad=:ciudad,
            email=:email,
            pass=:pass,
            telefono=:telefono,
            imagen=:imagen WHERE id_cli_pro=:id_usuario
        ");
        
        $stmt->bindParam(":nombre", $data['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(":apellido", $data['apellido'], PDO::PARAM_STR);
        $stmt->bindParam(":direccion", $data['direccion'], PDO::PARAM_STR);
        $stmt->bindParam(":ciudad", $data['ciudad'], PDO::PARAM_STR);
        $stmt->bindParam(":email", $data['email'], PDO::PARAM_STR);
        $stmt->bindParam(":pass", $data['pass'], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $data['telefono'], PDO::PARAM_STR);
        $stmt->bindParam(":imagen", $data['imagen'], PDO::PARAM_STR);
        $stmt->bindParam(":id_usuario", $data['id_usuario'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }

    //Para contar los usuarios nuevos mensualmente
    public function usuarios_nuevos(){
        $stmt=$this->conexion->conectar()->prepare("SELECT COUNT(*) AS resultado FROM cli_pro WHERE MONTH(fecha_registro) = MONTH(CURRENT_DATE())");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }

    //Mostrar cantidad de usuarios eliminados
    public function usuarios_eliminados(){
        $stmt=$this->conexion->conectar()->prepare("SELECT COUNT(*) AS resultado FROM cli_pro WHERE MONTH(fecha_registro) = MONTH(CURRENT_DATE()) AND condicion=0 ");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
    
    //Muestra el nombre de un vendedor
    public function nombre_vendedor($id_vendedor){
        $stmt=$this->conexion->conectar()->prepare("SELECT CONCAT(nombre,' ',apellido) AS resultado FROM productos INNER JOIN cli_pro ON productos.id_vendedor=cli_pro.id_cli_pro WHERE id_vendedor=:id_vendedor");
        $stmt->bindParam(":id_vendedor",$id_vendedor,PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }


    
}
