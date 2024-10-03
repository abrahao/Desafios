<?php

namespace App\Models;

use App\Config\Database;

class Banco
{
    public function getAllBancos()
    {
        $db = Database::getConnection();
        $sql = "SELECT * FROM tb_banco";
        $stmt = $db->query($sql);
        return $stmt->fetchAll();
    }
}
