<?php

require_once "vendor/autoload.php";
use Alura\DesignPatern\GeraPedido;
use Alura\DesignPatern\Orcamento;
use Alura\DesignPatern\Pedido;

$valorOrcamento = $argv[1];
$numeroDeItems = $argv[2]; 
$nomeCliente = $argv[3]; 

$gerarPedido =  new GeraPedido($valorOrcamento,$numeroDeItems,$nomeCliente);
$gerarPedidoHandler = new $gerarPedidoHandler();
$gerarPedidoHandler->execute($gerarPedido);