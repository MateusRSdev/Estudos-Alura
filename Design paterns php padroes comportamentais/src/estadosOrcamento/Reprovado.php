<?php

namespace Alura\DesignPatern\estadosOrcamento;
use Alura\DesignPatern\Orcamento;

class Reprovado extends EstadoOrcamento{
    public function calculaDescontoExtra(Orcamento $orcamento) : float {
        throw new \DomainException("Um orcamento reprovado nao pode receber desconto");
    }
    public function finaliza(Orcamento $orcamento) {
        $orcamento->estadoAtual = new Finalizado;
    }
}