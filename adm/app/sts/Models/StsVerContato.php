<?php

namespace App\sts\Models;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of StsVerContato
 *
 * @copyright (c) 2018, Ângelo Caixeta - Caixeta
 */
class StsVerContato
{
    private $Resultado;
    private $DadosId;
    
    public function verContato($DadosId)
    {
        $this->DadosId = (int) $DadosId;
        $verContato = new \App\adms\Models\helper\AdmsRead();
        $verContato->fullRead("SELECT * FROM sts_contatos WHERE id =:id LIMIT :limit", "id=".$this->DadosId."&limit=1");
        $this->Resultado= $verContato->getResultado();
        return $this->Resultado;
    }
}
