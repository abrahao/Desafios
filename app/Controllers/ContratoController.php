<?php

namespace App\Controllers;

use App\Models\Contrato;

class ContratoController
{
    public function index()
    {
        $contratoModel = new Contrato();
        $contratos = $contratoModel->getAllContracts();
        require_once '../app/Views/contratos/index.php';
    }
}
