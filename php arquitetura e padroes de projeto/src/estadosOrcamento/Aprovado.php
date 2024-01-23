<?php

namespace Alura\DesignPatern\estadosOrcamento;
use Alura\DesignPatern\Orcamento;

class Aprovado{
    public function calculaDescontoExtra(Orcamento $orcamento) : float {
        return $orcamento->valor * 0.02;
    }
}