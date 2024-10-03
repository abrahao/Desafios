<?php

namespace App\Models;

use App\Config\Database;

class Convenio
{
    public function getAllConvenios()
    {
        $db = Database::getConnection();
        $sql = "SELECT c.codigo, c.convenio, c.verba, b.nome AS nome_banco FROM tb_convenio c 
                JOIN tb_banco b ON c.banco = b.codigo";
        $stmt = $db->query($sql);
        return $stmt->fetchAll();
    }
}
