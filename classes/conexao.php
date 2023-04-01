<?php
class Conexao{
    private $user = "root";
    private $pass = "";
    private $host = "localhost";
    private $data = "sisLogin";
    private $con;

    public function __construct(){
        $this->con = mysqli_connect($this->host, $this->user,$this->pass) or die ("Erro na conexão".mysqli_error($this->con));
        
        mysqli_select_db($this->con, $this->data) or die("Erro na conexão".mysqli_error($this->con));
    }
    public function getCon(){
        return $this->con;
    }
}