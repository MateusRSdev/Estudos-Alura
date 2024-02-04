<?php 
namespace Alura\DesignPatern\relatorio;

use Alura\DesignPatern\Orcamento;
use Alura\DesignPatern\relatorio\ConteudoExportado;

class OrcamentoExportado implements ConteudoExportado{

    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento) {
        $this->orcamento = $orcamento;
    }
    public function conteudo(): array
    {
        return [
            "valor"=> $this->orcamento->valor,
            "quantidadeItems"=>$this->orcamento->quantidadeItems
        ];
    }
}