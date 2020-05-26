<?php

namespace App\sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of AltSitSobEmpresa
 *
 * @copyright (c) 2018, Ângelo Caixeta - Caixeta
 */
class AltSitSobEmpresa
{

    private $DadosId;

    public function altSitSobEmpresa($DadosId = null)
    {
        $this->DadosId = (int) $DadosId;
        if (!empty($this->DadosId)) {
            $altSitSobEmpresa = new \App\sts\Models\StsAltSitSobEmpresa();
            $altSitSobEmpresa->altSitSobEmpresa($this->DadosId);
        }

        $UrlDestino = URLADM . "sob-empresa/listar";
        header("Location: $UrlDestino");
    }

}
