<?php

namespace App\sts\Models;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of StsCadastrarTpArtigo
 *
 * @copyright (c) 2018, Ângelo Caixeta - Caixeta
 */
class StsCadastrarTpArtigo
{

    private $Resultado;
    private $Dados;

    function getResultado()
    {
        return $this->Resultado;
    }

    public function cadTpArtigo(array $Dados)
    {
        $this->Dados = $Dados;

        $valCampoVazio = new \App\adms\Models\helper\AdmsCampoVazio;
        $valCampoVazio->validarDados($this->Dados);

        if ($valCampoVazio->getResultado()) {
            $this->inserirTpArtigo();
        } else {
            $this->Resultado = false;
        }
    }

    private function inserirTpArtigo()
    {
        $this->Dados['created'] = date("Y-m-d H:i:s");
        $cadTpArtigo = new \App\adms\Models\helper\AdmsCreate;
        $cadTpArtigo->exeCreate("sts_tps_artigos", $this->Dados);
        if ($cadTpArtigo->getResultado()) {
            $_SESSION['msg'] = "<div class='alert alert-success'>Tipo de artigo cadastrado com sucesso!</div>";
            $this->Resultado = true;
        } else {
            $_SESSION['msg'] = "<div class='alert alert-danger'>Erro: Tipo de artigo não foi cadastrado!</div>";
            $this->Resultado = false;
        }
    }
    
}
