<?php 

require "vendor/autoload.php";

use Alura\DesignPatern\{Orcamento,Pedido};
use Alura\DesignPatern\relatorio\{OrcamentoExportado,PedidoExportado};
use Alura\DesignPatern\relatorio\{ArquivoXmlExportado,ArquivoZipExportado};

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItems = 6;


$pedido = new Pedido();
$pedido->nomeCliente = "Mateus ramos";
$pedido->dataFinalizacao = new DateTimeImmutable();


$orcamentoExportado = new OrcamentoExportado($orcamento);
$pedidoExportado = new PedidoExportado($pedido);
$orcamentoExportadoXml = new ArquivoZipExportado("orcamento.array");
$pedidoExportadoXml = new ArquivoXmlExportado("pedido");


echo $orcamentoExportadoXml->salvar($orcamentoExportado) . PHP_EOL;
echo $pedidoExportadoXml->salvar($pedidoExportado);
 