<?php

namespace App\Config;

use PDO;
use PDOException;
use Dotenv\Dotenv;

class Database
{
    private static $connection;

    public static function getConnection()
    {
        if (!self::$connection) {
            // Carrega o arquivo .env
            $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
            $dotenv->load();

            // Pega as variáveis de conexao e define a configuração do banco de dados
            $config = [
                'host' => $_ENV['DB_HOST'] ?? 'localhost',
                'dbname' => $_ENV['DB_DATABASE'] ?? 'default_db',
                'user' => $_ENV['DB_USERNAME'] ?? 'root',
                'password' => $_ENV['DB_PASSWORD'] ?? '',
                'port' => $_ENV['DB_PORT'] ?? 3306,
            ];

            try {
                $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset=utf8mb4";

                // Cria a conexão
                self::$connection = new PDO($dsn, $config['user'], $config['password']);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die('Erro ao conectar ao banco de dados: ' . $e->getMessage());
            }
        }

        return self::$connection;
    }
}
