<?php 
namespace Alura\DesignPatern\relatorio;


use Alura\DesignPatern\Pedido;
use Alura\DesignPatern\relatorio\ConteudoExportado;

class PedidoExportado implements ConteudoExportado{

    private Pedido $Pedido;

    public function __construct(Pedido $Pedido) {
        $this->Pedido = $Pedido;
    }
    public function conteudo(): array
    {
        return [
            "data_finalizacao" => $this->Pedido->dataFinalizacao->format("d/m/Y"),
            "nome_cliente" => $this->Pedido->nomeCliente
        ];
    }
}