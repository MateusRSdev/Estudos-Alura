<?php

namespace Alura\DesignPatern;
use Alura\DesignPatern\Http\HttpAdapter;

class RegistroOrcamento{

    private HttpAdapter $http;

    public  function __construct(HttpAdapter $httpAdapter) {
        $this->http = $httpAdapter;
    }
    public function registrar(Orcamento $orcamento) : void
    {
        if(!$orcamento->estadoAtual instanceof Finalizado){
            throw new \DomainException("Apenas orcamentos"); 
        }
        $this->http->post("http://api.registrar.orcamento",[
            "valor"=>$orcamento->valor,
            "QuantidadeItems"=>$orcamento->quantidadeItems
        ]);
    }
}