<?php

namespace Alura\DesignPatern;
use Alura\DesignPatern\estadosOrcamento\EmAprovacao;
use Alura\DesignPatern\estadosOrcamento\EstadoOrcamento;

class Orcamento 
{
    public int $quantidadeItems;
    public float $valor;
    public EstadoOrcamento $estadoAtual;
 
    public function __construct() {
        $this->estadoAtual = new EmAprovacao();
    }
    public function aplicaDescontoExtra() {
        $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
    }

    public function aprova(){
        $this->estadoAtual->aprova($this);
    }
    public function reprova(){
        $this->estadoAtual->reprovado($this);
    }
    public function finaliza(){
        $this->estadoAtual->finaliza($this);
    }


}
