<?php
require_once("../model/bancoPrato.php");
class deletaP {
    private $deletaP;

    public function __construct($id){
        $this->deletaP = new Banco();
        if($this->deletaP->deletePrato($id)== TRUE){
            echo "<script>alert('Registro deletado com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
}
new deletaP($_GET['id']);
?>
