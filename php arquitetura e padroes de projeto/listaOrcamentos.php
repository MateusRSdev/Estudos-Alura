<?php

require_once "vendor/autoload.php";

use Alura\DesignPatern\ListaDeOrcamentos;
use Alura\DesignPatern\Orcamento;


$orcamento1 = new Orcamento();
$orcamento1->quantidadeItems = 2;
$orcamento1->aprova();
$orcamento1->valor = 1500.75;



$orcamento2 = new Orcamento();
$orcamento2->quantidadeItems = 7;
$orcamento2->reprova();
$orcamento2->valor = 150.7;




$orcamento3 = new Orcamento();
$orcamento3->quantidadeItems = 5;
$orcamento3->reprova();
$orcamento3->finaliza();
$orcamento3->valor = 1350.75;


$listaOrcamentos = new ListaDeOrcamentos();
$listaOrcamentos->AddOrcamento($orcamento1);
$listaOrcamentos->AddOrcamento($orcamento2);
$listaOrcamentos->AddOrcamento($orcamento3);

foreach($listaOrcamentos->getIterator() as $orcamento){
    echo "Valor: ". $orcamento->valor . PHP_EOL; 
    echo "Estado: ". get_class($orcamento->estadoAtual) . PHP_EOL; 
    echo "Qtd Items: ". $orcamento->quantidadeItems . PHP_EOL; 
    echo PHP_EOL;
}