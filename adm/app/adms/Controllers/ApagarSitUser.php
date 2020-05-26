<?php

namespace App\adms\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of ApagarSitUser
 *
 * @copyright (c) 2018, Ângelo Caixeta - Caixeta
 */
class ApagarSitUser
{

    private $DadosId;

    public function apagarSitUser($DadosId = null)
    {
        $this->DadosId = (int) $DadosId;
        if (!empty($this->DadosId)) {
           $apagarSitUser = new \App\adms\Models\AdmsApagarSitUser();
           $apagarSitUser->apagarSitUser($this->DadosId);
        } else {
            $_SESSION['msg'] = "<div class='alert alert-danger'>Erro: Necessário selecionar uma situação de usuário!</div>";
        }
        $UrlDestino = URLADM . 'situacao-user/listar';
        header("Location: $UrlDestino");
    }

}
