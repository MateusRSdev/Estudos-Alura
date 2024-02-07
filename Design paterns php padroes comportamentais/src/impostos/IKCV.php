<?php

namespace Alura\DesignPatern\Impostos;
use Alura\DesignPatern\Orcamento;
use Alura\DesignPatern\Impostos\impostoCom2Aliquotas;

class IKCV extends impostoCom2Aliquotas{
    public function deveAplicarTaxaMaxima(Orcamento $orcamento) : bool {
        return $orcamento->valor > 300 && $orcamento->quantidadeItems > 3;
    }
    public function calculaTaxaMaxima(Orcamento $orcamento) : bool {
        return $orcamento->valor * 0.04;
    }
    public function calculaTaxaMinima(Orcamento $orcamento) : bool {
        return $orcamento->valor * 0.025;
    }
}