<?php

namespace App\sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of AltSitArtigo
 *
 * @copyright (c) 2018, Ângelo Caixeta - Caixeta
 */
class AltSitArtigo
{

    private $DadosId;

    public function altSitArtigo($DadosId = null)
    {
        $this->DadosId = (int) $DadosId;
        if (!empty($this->DadosId)) {
            $altSitArtigo = new \App\sts\Models\StsAltSitArtigo();
            $altSitArtigo->altSitArtigo($this->DadosId);
        }

        $UrlDestino = URLADM . "artigo/listar";
        header("Location: $UrlDestino");
    }

}
