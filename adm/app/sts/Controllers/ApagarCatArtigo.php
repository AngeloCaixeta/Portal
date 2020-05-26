<?php

namespace App\sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of ApagarCatArtigo
 *
 * @copyright (c) 2018, Ângelo Caixeta - Caixeta
 */
class ApagarCatArtigo
{

    private $DadosId;

    public function apagarCatArtigo($DadosId = null)
    {
        $this->DadosId = (int) $DadosId;
        if (!empty($this->DadosId)) {
           $apagarCatArtigo = new \App\sts\Models\StsApagarCatArtigo();
           $apagarCatArtigo->apagarCatArtigo($this->DadosId);
        } else {
            $_SESSION['msg'] = "<div class='alert alert-danger'>Erro: Necessário selecionar uma categoria de artigo!</div>";
        }
        $UrlDestino = URLADM . 'cat-artigo/listar';
        header("Location: $UrlDestino");
    }

}
