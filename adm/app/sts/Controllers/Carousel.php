<?php

namespace App\sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of Carousel
 *
 * @copyright (c) 2018, Ângelo Caixeta - Caixeta
 */
class Carousel
{

    private $Dados;
    private $PageId;

    public function listar($PageId = null)
    {
        $this->PageId = (int) $PageId ? $PageId : 1;

        $botao = ['cad_carousel' => ['menu_controller' => 'cadastrar-carousel', 'menu_metodo' => 'cad-carousel'],
            'vis_carousel' => ['menu_controller' => 'ver-carousel', 'menu_metodo' => 'ver-carousel'],
            'edit_carousel' => ['menu_controller' => 'editar-carousel', 'menu_metodo' => 'edit-carousel'],
            'del_carousel' => ['menu_controller' => 'apagar-carousel', 'menu_metodo' => 'apagar-carousel'],
            'ordem_carousel' => ['menu_controller' => 'alt-ordem-carousel', 'menu_metodo' => 'alt-ordem-carousel'],
            'alt_sit_carousel' => ['menu_controller' => 'alt-sit-carousel', 'menu_metodo' => 'alt-sit-carousel']];
        $listarBotao = new \App\adms\Models\AdmsBotao();
        $this->Dados['botao'] = $listarBotao->valBotao($botao);

        $listarMenu = new \App\adms\Models\AdmsMenu();
        $this->Dados['menu'] = $listarMenu->itemMenu();

        $listarCarousel = new \App\sts\Models\StsListarCarousel();
        $this->Dados['listCarousel'] = $listarCarousel->listarCarousel($this->PageId);
        $this->Dados['paginacao'] = $listarCarousel->getResultadoPg();
        
        $carregarView = new \Core\ConfigView("sts/Views/carousel/listarCarousel", $this->Dados);
        $carregarView->renderizar();
    }

}
