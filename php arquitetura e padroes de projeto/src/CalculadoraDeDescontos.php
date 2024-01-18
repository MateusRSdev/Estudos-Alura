<?php

namespace Alura\DesignPatern;
use Alura\DesignPatern\descontos\Desconto;
use Alura\DesignPatern\descontos\DescontoMaisDe500Reais;
use Alura\DesignPatern\descontos\DescontosMaisde5Items;
use Alura\DesignPatern\descontos\SemDesconto;

class CalculadoraDeDescontos  
{
    public function calculaDesconto(Orcamento $orcamento) : float {

        $cadeiaDeDescontos = new DescontosMaisde5Items(
            new DescontoMaisDe500Reais(
                new SemDesconto()
            )  
        );

        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}
