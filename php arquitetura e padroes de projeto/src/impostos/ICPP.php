<?php

namespace Alura\DesignPatern\Impostos;
use Alura\DesignPatern\Orcamento;

class ICPP extends impostoCom2Aliquotas{
    private function deveAplicarTaxaMaxima(Orcamento $orcamento) : bool {
        return $orcamento->valor > 500;
    }
    private function calculaTaxaMaxima(Orcamento $orcamento) : bool {
        return $orcamento->valor * 0.03;
    }
    private function calculaTaxaMinima(Orcamento $orcamento) : bool {
        return $orcamento->valor * 0.02;
    }
}