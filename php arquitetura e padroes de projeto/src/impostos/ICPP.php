<?php

namespace Alura\DesignPatern\Impostos;
use Alura\DesignPatern\Orcamento;

class ICPP implements Imposto{
    public function CalculaImposto(Orcamento $orcamento) : float {
        if($orcamento->valor > 500){
            return $orcamento->valor * 0.03;
        }
        return $orcamento->valor * 0.02;
    }
}