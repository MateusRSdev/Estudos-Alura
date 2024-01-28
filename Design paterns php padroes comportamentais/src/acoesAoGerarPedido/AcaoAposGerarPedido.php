<?php
namespace Alura\DesignPatern\acoesAoGerarPedido;

use Alura\DesignPatern\Pedido;

interface AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido);
}
