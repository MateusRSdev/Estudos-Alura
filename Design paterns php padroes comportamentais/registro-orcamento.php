<?php
use Alura\DesignPatern\Http\CurlHttpAdapter;
use Alura\DesignPatern\Http\ReactPhpAdapter;
use Alura\DesignPatern\Orcamento;
use Alura\DesignPatern\RegistroOrcamento;

require "vendor/autoload.php";

$registroOrcamento =  new RegistroOrcamento(new ReactPhpAdapter());

$registroOrcamento->registrar(new Orcamento);