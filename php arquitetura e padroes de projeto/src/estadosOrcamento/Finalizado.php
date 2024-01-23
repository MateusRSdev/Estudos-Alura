<?php

namespace Alura\DesignPatern\estadosOrcamento;
use Alura\DesignPatern\Orcamento;

class Finalizado{
    public function calculaDescontoExtra(Orcamento $orcamento) : float {
        throw new \DomainException("Um orcamento finalizado nao pode receber desconto");
    }
}