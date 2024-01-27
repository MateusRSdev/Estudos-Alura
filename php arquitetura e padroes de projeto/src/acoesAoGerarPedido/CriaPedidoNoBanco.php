<?php
namespace Alura\DesignPatern\acoesAoGerarPedido;
use Alura\DesignPatern\Pedido;

class CriaPedidoNoBanco implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido) {
        echo "Salvando pedido no banco de dados";
    }
}
