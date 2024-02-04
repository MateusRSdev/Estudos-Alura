<?php 
use Alura\DesignPatern\Orcamento;
use Alura\DesignPatern\relatorio\OrcamentoZip;

require "vendor/autoload.php";

$orcamentoZip = new OrcamentoZip();
$orcamento = new Orcamento();
$orcamento->valor = 500;

$orcamentoZip->exportar($orcamento);