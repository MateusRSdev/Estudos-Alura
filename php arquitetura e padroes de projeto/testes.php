<?php

use Alura\DesignPatern\Orcamento;
use Alura\DesignPatern\CalculadoraDeImpostos;

require "vendor/autoload.php";

$calculadora =  new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento,"ISS");