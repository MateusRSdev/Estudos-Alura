<?php

namespace Alura\DesignPatern\estadosOrcamento;
use Alura\DesignPatern\Orcamento;

abstract class EstadoOrcamento{

    /*
    @throws \DomainException
    */
    abstract public function calculaDescontoExtra(Orcamento $orcamento): float;

    public function aprova(Orcamento $orcamento) {
        throw new \DomainException("este Orcamento nao pode ser aprovado");
        
    }
    public function reprovado(Orcamento $orcamento) {
        throw new \DomainException("este Orcamento nao pode ser reprovado");
        
    }
    public function finaliza(Orcamento $orcamento) {
        throw new \DomainException("este Orcamento nao pode ser finalizado");
        
    }

 
}