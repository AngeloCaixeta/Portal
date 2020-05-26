<?php

namespace App\sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of ApagarContato
 *
 * @copyright (c) 2018, Ângelo Caixeta - Caixeta
 */
class ApagarContato
{

    private $DadosId;

    public function apagarContato($DadosId = null)
    {
        $this->DadosId = (int) $DadosId;
        if (!empty($this->DadosId)) {
           $apagarContato = new \App\sts\Models\StsApagarContato();
           $apagarContato->apagarContato($this->DadosId);
        } else {
            $_SESSION['msg'] = "<div class='alert alert-danger'>Erro: Necessário selecionar uma mensagem de contato!</div>";
        }
        $UrlDestino = URLADM . 'contato/listar';
        header("Location: $UrlDestino");
    }

}
