<?php

namespace App\sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of AltOrdemCarousel
 *
 * @copyright (c) 2018, Ângelo Caixeta - Caixeta
 */
class AltOrdemCarousel
{

    private $DadosId;

    public function altOrdemCarousel($DadosId = null)
    {
        $this->DadosId = (int) $DadosId;
        if (!empty($this->DadosId)) {
           $altOrdemCarousel = new \App\sts\Models\StsAltOrdemCarousel();
           $altOrdemCarousel->altOrdemCarousel($this->DadosId);
        } else {
            $_SESSION['msg'] = "<div class='alert alert-danger'>Erro: Necessário selecionar um slide de carousel!</div>";
        }
        $UrlDestino = URLADM . 'carousel/listar';
        header("Location: $UrlDestino");
    }

}
