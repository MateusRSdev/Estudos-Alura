<?php

use Alura\DesignPatern\Impostos\ICMS;
use Alura\DesignPatern\Impostos\ICPP;
use Alura\DesignPatern\Impostos\IKCV;
use Alura\DesignPatern\Impostos\ISS;
use Alura\DesignPatern\Orcamento;

use Alura\DesignPatern\CalculadoraDeImpostos;
use Alura\DesignPatern\CalculadoraDeDescontos;

require "vendor/autoload.php";

$calculadora =  new CalculadoraDeDescontos();

$orcamento = new Orcamento(); 
$orcamento->valor = 600;
$orcamento->quantidadeItems = 6;

// echo $calculadora->calculaDesconto($orcamento);

$calculadoraImpostos = new CalculadoraDeImpostos();

$orcamento2 = new Orcamento(); 
$orcamento2->valor = 600;
$orcamento2->quantidadeItems = 6;

echo $calculadoraImpostos->calcula($orcamento, new ICMS(new ISS(new ICPP(new IKCV))));
