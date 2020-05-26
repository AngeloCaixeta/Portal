<?php

namespace App\adms\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of ApagarMenu
 *
 * @copyright (c) 2018, Ângelo Caixeta - Caixeta
 */
class ApagarMenu
{

    private $DadosId;

    public function apagarMenu($DadosId = null)
    {
        $this->DadosId = (int) $DadosId;
        if (!empty($this->DadosId)) {
           $apagarMenu = new \App\adms\Models\AdmsApagarMenu();
           $apagarMenu->apagarMenu($this->DadosId);
        } else {
            $_SESSION['msg'] = "<div class='alert alert-danger'>Erro: Necessário selecionar um item de menu!</div>";
        }
        $UrlDestino = URLADM . 'menu/listar';
        header("Location: $UrlDestino");
    }

}
