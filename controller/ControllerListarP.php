<?php
require_once("../model/bancoPrato.php");
class listarControllerP{

    private $listaP;

    public function __construct(){
        $this->listaP = new Banco();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->listaP->getPrato();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['id'] ."</th>";
            echo "<th>".$value['nome'] ."</th>";
            echo "<td>".$value['tipo_Prato'] ."</td>";
            echo "<td>".$value['preco'] ."</td>";
            echo "<td class=\"d-flex justify-content-around\"><a class='btn btn-warning ' href='editarP.php?id=".$value['nome']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeleteP.php?id=".$value['nome']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}

