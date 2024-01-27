<?php
namespace Alura\DesignPatern\acoesAoGerarPedido;

use Alura\DesignPatern\Pedido;

class GerarLogDoPedido  implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido) {
        echo "gerando log do pedido";
    }
}
