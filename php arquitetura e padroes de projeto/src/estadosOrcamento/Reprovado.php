<?php

namespace Alura\DesignPatern\estadosOrcamento;
use Alura\DesignPatern\Orcamento;

class Reprovado{
    public function calculaDescontoExtra(Orcamento $orcamento) : float {
        throw new \DomainException("Um orcamento reprovado nao pode receber desconto");
    }
}