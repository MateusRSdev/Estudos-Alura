<?php

namespace Alura\DesignPatern;
use Alura\DesignPatern\estadosOrcamento\Finalizado;

class ListaDeOrcamentos implements \IteratorAggregate
{
    /** @var Orcamento[] */
    private array $orcamentos;

    public function __construct() {
        $this->orcamentos = [];
    }
    public function AddOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    public function orcamentosFinalizados()
    {
        return array_filter($this->orcamentos, function ($orcamento) {
            if(get_class($orcamento->estadoAtual) === Finalizado::class) {
                return $orcamento;
            }
        });
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->orcamentos);
    }
}
