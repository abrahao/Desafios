<?php
use App\Controllers\BancoController;
use App\Controllers\ConvenioController;
use App\Controllers\ServicoController;

require __DIR__ . '/../vendor/autoload.php';

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

use App\Controllers\ContratoController;
use App\Controllers\AgrupamentoController;
use App\Controllers\IndexController;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri === '/') {
    (new IndexController())->index();
} elseif ($uri === '/contratos') {
    (new ContratoController())->index();
} elseif ($uri === '/bancos') {
    (new BancoController())->index();
} elseif ($uri === '/convenios') {
    (new ConvenioController())->index();
} elseif ($uri === '/agrupamentos') {
    (new AgrupamentoController())->index();
} elseif ($uri === '/servicos') {
    (new ServicoController())->index();
} else {
    echo "Página não encontrada";
}
