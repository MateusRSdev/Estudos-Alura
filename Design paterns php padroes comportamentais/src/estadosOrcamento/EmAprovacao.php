<?php

namespace Alura\DesignPatern\estadosOrcamento;
use Alura\DesignPatern\Orcamento;

class EmAprovacao extends EstadoOrcamento{
    public function calculaDescontoExtra(Orcamento $orcamento) : float {
        return $orcamento->valor * 0.05;
    }
    public function aprova(Orcamento $orcamento) {
        $orcamento->estadoAtual = new Aprovado();
    }
    public function reprovado(Orcamento $orcamento) {
        $orcamento->estadoAtual =  new Reprovado();
    }

}