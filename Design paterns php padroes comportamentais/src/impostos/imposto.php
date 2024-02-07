<?php

namespace Alura\DesignPatern\Impostos;
use Alura\DesignPatern\Orcamento;

abstract class Imposto{

    private ?Imposto $outroImposto;

    public function __construct(Imposto $outroImposto = null) {
        $this->outroImposto = $outroImposto;
    }
    abstract protected function RealizaCalculoEspecifico(Orcamento $orcamento);

     public function CalculaImposto(Orcamento $orcamento){
        return $this->RealizaCalculoEspecifico($orcamento) + $this->RealizaCalculoDeOutroImposto($orcamento);
     }

     public function RealizaCalculoDeOutroImposto(Orcamento $orcamento)
     {
        return $this->outroImposto === null ? 0 : $this->outroImposto->CalculaImposto($orcamento);
     }

}