<?php

namespace App\Controllers;

use App\Models\Servico;

class ServicoController
{
    public function index()
    {
        $servicoModel = new Servico();
        $servicos = $servicoModel->getAllServicos();

        require_once '../app/Views/servicos/index.php';
    }
}
