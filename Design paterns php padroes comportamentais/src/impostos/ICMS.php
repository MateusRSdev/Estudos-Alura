<?php

namespace Alura\DesignPatern\Impostos;
use Alura\DesignPatern\Orcamento;

class ICMS extends Imposto{
    public function RealizaCalculoEspecifico(Orcamento $orcamento) : float {
        return $orcamento->valor * 0.1;
    }
}