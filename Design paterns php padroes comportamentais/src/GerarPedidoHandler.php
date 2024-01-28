<?php

namespace Alura\DesignPatern;

use Alura\DesignPatern\acoesAoGerarPedido\AcaoAposGerarPedido;
use Alura\DesignPatern\acoesAoGerarPedido\CriaPedidoNoBanco;
use Alura\DesignPatern\acoesAoGerarPedido\EmviarPedidoPorEmail;
use Alura\DesignPatern\acoesAoGerarPedido\GerarLogDoPedido;
use DateTimeImmutable;


class GerarPedidoHandler
{
    /** @var AcaoAposGerarPedido[] */
    private array $acoesAoGerarPedido = [];

    public function __construct(){
        
    }

    public function adicionarAcaoAoGerarPedido(AcaoAposGerarPedido $acao)
    {
        $this->acoesAoGerarPedido[] = $acao;
    }

    public function execute(GeraPedido $geraPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItems = $geraPedido->getNumeroDeItems();
        $orcamento->valor = $geraPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new DateTimeImmutable();
        $pedido->nomeCliente = $geraPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        foreach ($this->acoesAoGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }
    }
}
