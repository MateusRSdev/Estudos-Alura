<?php

namespace Alura\DesignPatern\Impostos;
use Alura\DesignPatern\Orcamento;

abstract class impostoCom2Aliquotas extends Imposto{
    public function RealizaCalculoEspecifico(Orcamento $orcamento) : float {
        if($this->deveAplicarTaxaMaxima($orcamento)){
            return $this->calculaTaxaMaxima($orcamento);
        }
        return $this->calculaTaxaMinima($orcamento);
    }
    abstract public function deveAplicarTaxaMaxima(Orcamento $orcamento) : bool;
    abstract public function calculaTaxaMinima(Orcamento $orcamento) : bool;
    abstract public function calculaTaxaMaxima(Orcamento $orcamento) : bool;

}