<?php

namespace Alura\DesignPatern\descontos;
use Alura\DesignPatern\Orcamento;

class DescontoMaisDe500Reais extends Desconto 
{
    public function calculaDesconto(Orcamento $orcamento) : float {
        if($orcamento->valor > 500){
            return $orcamento->valor * 0.1;
        }
        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}


