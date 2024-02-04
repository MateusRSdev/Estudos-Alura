<?php 
namespace Alura\DesignPatern\relatorio;

interface ArquivoExportado{
    public function salvar(ConteudoExportado $conteudoExportado): string;
    
}