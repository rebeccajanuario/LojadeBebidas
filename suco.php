<?php

require_once 'bebida.php';

class Suco extends Bebida{
    private $sabor;

    public function getSabor(){
        return $this->sabor;
    }
    public function setSabor($sabor){
        $this->sabor = $sabor;
    }

    public function mostrarBebida(){
        return "Nome: ".$this->getNome()." Preco: ".$this->getPreco();
    }
        
    public function verificarPreco(){
        $retorno = true;
        if($this->getPreco() < 5){
            $retorno = true;
            return $retorno; 
        }else{
            $retorno = false;
            return $retorno;
        }
    }
}

?>