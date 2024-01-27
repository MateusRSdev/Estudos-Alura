<?php
namespace Alura\DesignPatern\acoesAoGerarPedido;

use Alura\DesignPatern\Pedido;

class EmviarPedidoPorEmail implements AcaoAposGerarPedido 
{
    public function executaAcao(Pedido $pedido) {
        echo "enviando email";
    }
}
