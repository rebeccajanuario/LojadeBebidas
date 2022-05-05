<?php

require_once 'bebida.php';

class Refrigerante extends Bebida{
    private $retornavel;
    
    public function getRetornavel(){
        return $this->retornavel;
    }
    public function setRetornavel($retornavel){
        $this->retornavel = $retornavel;
    }

    public function mostrarBebida(){
        return "Nome: ".$this->getNome()." Preco: ".$this->getPreco();
    }

    public function verificarPreco(){
        $retorno = true;
        if($this->getPreco() < 2.5){
            $retorno = true;
            return $retorno; 
        }else{
            $retorno = false;
            return $retorno;
        }
    }
}

?>