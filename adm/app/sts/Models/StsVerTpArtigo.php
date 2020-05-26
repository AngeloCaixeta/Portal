<?php

namespace App\sts\Models;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of StsVerTpArtigo
 *
 * @copyright (c) 2018, Ângelo Caixeta - Caixeta
 */
class StsVerTpArtigo
{

    private $Resultado;
    private $DadosId;

    public function verTpArtigo($DadosId)
    {
        $this->DadosId = (int) $DadosId;
        $verTpArtigo = new \App\adms\Models\helper\AdmsRead();
        $verTpArtigo->fullRead("SELECT * FROM sts_tps_artigos 
                WHERE id =:id LIMIT :limit", "id=" . $this->DadosId . "&limit=1");
        $this->Resultado = $verTpArtigo->getResultado();
        return $this->Resultado;
    }

}
