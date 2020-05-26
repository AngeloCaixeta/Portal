<?php

namespace Sts\Models;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of StsServico
 *
 * @copyright (c) 2018, Ângelo Caixeta - Caixeta
 */
class StsServico
{
    private $Resultado;
    
    public function listar()
    {
        $listar = new \Sts\Models\helper\StsRead();
        $listar->exeRead('sts_servicos', 'LIMIT :limit', 'limit=1');
        $this->Resultado = $listar->getResultado();
        return $this->Resultado;
    }
}
