<?php

require_once "vendor/autoload.php";
use Alura\DesignPatern\acoesAoGerarPedido\CriaPedidoNoBanco;
use Alura\DesignPatern\acoesAoGerarPedido\EmviarPedidoPorEmail;
use Alura\DesignPatern\acoesAoGerarPedido\GerarLogDoPedido;
use Alura\DesignPatern\GeraPedido;
use Alura\DesignPatern\GerarPedidoHandler;
use Alura\DesignPatern\Orcamento;
use Alura\DesignPatern\Pedido;

$valorOrcamento = $argv[1];
$numeroDeItems = $argv[2]; 
$nomeCliente = $argv[3]; 

$gerarPedido =  new GeraPedido($valorOrcamento,$numeroDeItems,$nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new CriaPedidoNoBanco);
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new EmviarPedidoPorEmail);
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new GerarLogDoPedido);
$gerarPedidoHandler->execute($gerarPedido);