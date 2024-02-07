<?php

namespace Alura\DesignPatern\Impostos;
use Alura\DesignPatern\Orcamento;

class ISS extends Imposto{
    public function RealizaCalculoEspecifico(Orcamento $orcamento) : float {
        return $orcamento->valor * 0.06;
    }
}