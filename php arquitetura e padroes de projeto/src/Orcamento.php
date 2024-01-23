<?php

namespace Alura\DesignPatern;

class Orcamento 
{
    public int $quantidadeItems;
    public float $valor;
    public string $estadoAtual;

    public function aplicaDescontoExtra() {
        $this->valor -= $this->calculaDescontoExtra();
    }


}
