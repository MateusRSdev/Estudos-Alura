<?php

namespace Alura\DesignPatern\Impostos;
use Alura\DesignPatern\Orcamento;
use Alura\DesignPatern\Impostos\impostoCom2Aliquotas;

class IKCV extends impostoCom2Aliquotas{
    private function deveAplicarTaxaMaxima(Orcamento $orcamento) : bool {
        return $orcamento->valor > 300 && $orcamento->quantidadeItems > 3;
    }
    private function calculaTaxaMaxima(Orcamento $orcamento) : bool {
        return $orcamento->valor * 0.04;
    }
    private function calculaTaxaMinima(Orcamento $orcamento) : bool {
        return $orcamento->valor * 0.025;
    }
}