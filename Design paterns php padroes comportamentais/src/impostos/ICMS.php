<?php

namespace Alura\DesignPatern\Impostos;
use Alura\DesignPatern\Orcamento;

class ICMS implements Imposto{
    public function CalculaImposto(Orcamento $orcamento) : float {
        return $orcamento->valor * 0.1;
    }
}