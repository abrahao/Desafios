<?php

namespace App\Models;

use PDO;
use App\Config\Database;

class Contrato
{
    public function getAllContracts()
    {
        $db = Database::getConnection();
        $sql = "
        SELECT 
            b.nome AS nome_banco,          -- Nome do banco
            c.verba,                       -- Verba associada ao convênio
            co.codigo AS codigo_contrato,  -- Código do contrato
            co.data_inclusao,              -- Data de inclusão do contrato
            co.valor,                      -- Valor do contrato
            co.prazo                       -- Prazo do contrato
        FROM 
            tb_contrato co                 -- Tabela de contratos (apelidada como 'co')
        JOIN 
            tb_convenio_servico cs ON co.convenio_servico = cs.codigo
                                          -- Junta tb_contrato com tb_convenio_servico baseada na relação de convenios_servicos (cs.codigo) e co.convenio_servico
        JOIN 
            tb_convenio c ON cs.convenio = c.codigo
                                          -- Junta tb_convenio_servico com tb_convenio, conectando-os pela chave estrangeira (c.codigo)
        JOIN 
            tb_banco b ON c.banco = b.codigo
                                          -- Junta tb_convenio com tb_banco, conectando-os pela chave estrangeira c.banco
    ";

        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
