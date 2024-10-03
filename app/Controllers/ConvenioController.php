<?php

namespace App\Controllers;

use App\Models\Convenio;

class ConvenioController
{
    public function index()
    {
        $convenioModel = new Convenio();
        $convenios = $convenioModel->getAllConvenios();
        require_once '../app/Views/convenios/index.php';
    }
}
