<?php
namespace Alura\DesignPatern\relatorio;

use Alura\DesignPatern\Orcamento;

class ArquivoZipExportado implements ArquivoExportado{

    private string $nomeArquivoInterno;

    public function __construct(string $nomeArquivoInterno) {
        $this->nomeArquivoInterno = $nomeArquivoInterno;
    }

    public function salvar(ConteudoExportado $conteudoExportado): string {
        $caminhoArquivo = tempnam(sys_get_temp_dir(), "zip");
        $zip = new \ZipArchive();
        $zip->open($caminhoArquivo);
        $zip->addFromString($this->nomeArquivoInterno,serialize($conteudoExportado->conteudo()));
        $zip->close();

        return $caminhoArquivo;
    }

}