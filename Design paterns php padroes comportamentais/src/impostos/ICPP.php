<?php

namespace Alura\DesignPatern\Impostos;
use Alura\DesignPatern\Orcamento;
// use Alura\DesignPatern\Impostos\impostoCom2Aliquotas;

class ICPP extends impostoCom2Aliquotas{
    public function deveAplicarTaxaMaxima(Orcamento $orcamento) : bool {
        return $orcamento->valor > 500;
    }
    public function calculaTaxaMaxima(Orcamento $orcamento) : bool {
        return $orcamento->valor * 0.03;
    }
    public function calculaTaxaMinima(Orcamento $orcamento) : bool {
        return $orcamento->valor * 0.02;
    }
}