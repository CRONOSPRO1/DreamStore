<?php
class conexion
{

    private $server;
    private $user;
    private $db;
    private $pass;

    public function __construct()
    {
        $this->server = "localhost";
        $this->user = "root";
        $this->db = "dreamstore";
        $this->pass = "";
    }
    public function conectar()
    {
        $link = new PDO("mysql:host=$this->server;dbname=$this->db", $this->user, $this->pass);
        return $link; 
       
        
    }
    
    

}
