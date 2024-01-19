<?php

namespace Alura\DesignPatern\Impostos;
use Alura\DesignPatern\Orcamento;

class IKCV implements Imposto{
    public function CalculaImposto(Orcamento $orcamento) : float {
        if($orcamento->valor > 500 && $orcamento->quantidadeItems > 3){
            return $orcamento->valor * 0.04;
        }
        return $orcamento->valor * 0.025;
    }
}