<?php
require_once getcwd()."\db\MySQL.class.php";

class Vacinacao{
    private $id;
    private $nomeCid;
    private $dose1;
    private $dose2;
    private $doseU;
    private $populacao;

    public function __construct($id = null, $nomeCid = null, $dose1 = null, $dose2 = null, $doseU = null, $populacao = null){
        $this->id = $id;
        $this->nomeCid = $nomeCid;
        $this->dose1 = $dose1;
        $this->dose2 = $dose2;
        $this->doseU = $doseU;
        $this->populacao = $populacao;
    }
    
    public function __set($atributo,$valor){
        $this->$atributo = $valor;
    }

    public function __get($atributo){
        return $this->$atributo;
    }

    public static function pesquisa(){
        $conexao = new MySQL();
		$sql = "SELECT * FROM vacinacao";
		$resultados = $conexao->consulta($sql);
		if(!empty($resultados)){
            $respostas = array();
            foreach($resultados as $resultado){
                $resposta = new Vacinacao();
                $resposta->id = $resultado['id'];
                $resposta->resposta1 = $resultado['nomeCid'];
                $resposta->resposta2 = $resultado['dose1'];
                $resposta->resposta3 = $resultado['dose2'];
                $resposta->resposta4 = $resultado['doseU'];
                $resposta->solucao = $resultado['populacao'];
                $respostas[] = $resposta;
            }
            return $respostas;
        }else{
            return false;
        }
    }

}