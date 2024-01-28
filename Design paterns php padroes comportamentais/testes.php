<?php

use Alura\DesignPatern\CalculadoraDeDescontos;

use Alura\DesignPatern\Orcamento;

require "vendor/autoload.php";

$calculadora =  new CalculadoraDeDescontos();

$orcamento = new Orcamento(); 
$orcamento->valor = 600;
$orcamento->quantidadeItems = 6;

echo $calculadora->calculaDesconto($orcamento);

