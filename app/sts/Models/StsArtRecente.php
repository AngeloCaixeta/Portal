<?php

namespace Sts\Models;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of StsArtRecente
 *
 * @copyright (c) 2018, Ângelo Caixeta - Caixeta
 */
class StsArtRecente
{

    private $Resultado;

    public function listarArtRecente()
    {
        $listar = new \Sts\Models\helper\StsRead();
        $listar->fullRead('SELECT titulo, slug FROM sts_artigos 
                WHERE adms_sit_id =:adms_sit_id
                ORDER BY id DESC
                LIMIT :limit', "adms_sit_id=1&limit=7");
        $this->Resultado = $listar->getResultado();
        return $this->Resultado;
    }

}
