<?php

namespace Alura\DesignPatern;

use Alura\DesignPatern\Impostos\imposto;

class CalculadoraDeImpostos 
{
     public function calcula(Orcamento $orcamento, imposto $Imposto) : float 
     {
        return $Imposto->CalculaImposto($orcamento);
     }
}
