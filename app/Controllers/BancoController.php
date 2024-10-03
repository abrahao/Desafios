<?php

namespace App\Controllers;

use App\Models\Banco;

class BancoController
{
    public function index()
    {
        $bancoModel = new Banco();
        $bancos = $bancoModel->getAllBancos();

        require_once '../app//Views/bancos/index.php';

    }
}
