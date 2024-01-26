<?php

namespace Alura\DesignPatern;

class GeraPedido
{

    private float $valorOrcamento;
    private int $numeroDeItems;
    private string $nomeCliente;
    public function __construct(
        float $valorOrcamento,
        int $numeroDeItems,
        string $nomeCliente
    ) {
        $this->nomeCliente = $nomeCliente;
        $this->numeroDeItems = $numeroDeItems;
        $this->valorOrcamento = $valorOrcamento;
    }

    public function getValorOrcamento() : float
    {
        return $this->valorOrcamento;
    }
    public function getNumeroDeItems() : int
    {
        return $this->numeroDeItems;
    }
    public function getNomeCliente() : string
    {
        return $this->nomeCliente;
    }

}
