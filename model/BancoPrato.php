<?php

require_once("../init.php");
class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setPrato($nome,$tipo_Prato,$preco){
        $stmt = $this->mysqli->prepare("INSERT INTO Prato (`nome`, `tipo_Prato`, `preco`) VALUES (?,?,?)");
        $stmt->bind_param("sss",$nome,$tipo_Prato,$preco);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function getPrato(){
        $result = $this->mysqli->query("SELECT * FROM Prato");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deletePrato($id){
        if($this->mysqli->query("DELETE FROM `Prato` WHERE `nome` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
    public function pesquisaPrato($id){
        $result = $this->mysqli->query("SELECT * FROM Prato WHERE nome='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updatePrato($nome,$tipo,$preco,$id){
        $stmt = $this->mysqli->prepare("UPDATE `Prato` SET `nome` = ?, `tipo_Prato`=?, `preco`=? WHERE `nome` = ?");
        $stmt->bind_param("ssss",$nome,$tipo,$preco,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>
