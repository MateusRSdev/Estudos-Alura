<?php

namespace Alura\DesignPatern;

use DateTimeImmutable;

class GeraPedido
{

    public function execute(GeraPedido $geraPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItems = $geraPedido->getNumeroDeItems();
        $orcamento->valor = $geraPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new DateTimeImmutable();
        $pedido->nomeCliente = $geraPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        echo "cria pedido no banco de dados " . PHP_EOL; 
    }
}
