<?php

namespace Alura\DesignPatern;


class Pedido {

    public string $nomeCliente;
    public \DateTimeInterface $dataFinalizacao;
    public Orcamento $orcamento;

}
