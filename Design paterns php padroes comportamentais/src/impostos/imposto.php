<?php

namespace Alura\DesignPatern\Impostos;
use Alura\DesignPatern\Orcamento;

interface Imposto{
    public function CalculaImposto(Orcamento $orcamento);
}