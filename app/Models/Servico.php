<?php

namespace App\Models;

use App\Config\Database;

class Servico
{
    public function getAllServicos()
    {
        $db = Database::getConnection();
        $sql = "SELECT s.codigo, s.servico, c.convenio FROM tb_convenio_servico s 
                JOIN tb_convenio c ON s.convenio = c.codigo";
        $stmt = $db->query($sql);
        return $stmt->fetchAll();
    }
}
