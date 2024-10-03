<?php

namespace App\Controllers;

use App\Models\Agrupamento;

class AgrupamentoController
{
    public function index()
    {
        $agrupamentoModel = new Agrupamento();
        $agrupamentos = $agrupamentoModel->getGroupedContracts();
        require_once '../app/Views/agrupamentos/index.php';
    }
}
