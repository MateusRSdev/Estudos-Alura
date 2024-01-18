<?php
namespace Alura\DesignPatern\descontos;
use Alura\DesignPatern\Orcamento;

class SemDesconto extends Desconto{
    public function __construct() {
        parent::__construct(null);
    }
    public function calculaDesconto(Orcamento $orcamento) : float {
        return 0;
    }
}