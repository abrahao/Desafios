<?php

namespace App\Models;

use PDO;
use App\Config\Database;

class Agrupamento
{
    public function getGroupedContracts()
    {
        $db = Database::getConnection();
        $sql = "
           SELECT b.nome AS nome_banco,                    -- nome do banco
            c.verba,                                       -- verba associada ao convênio
            MIN(co.data_inclusao) AS contrato_mais_antigo, -- Seleciona a data do contrato mais antigo (mínima data de inclusão)
            MAX(co.data_inclusao) AS contrato_mais_recente, -- Seleciona a data do contrato mais recente (máxima data de inclusão)
            SUM(co.valor) AS soma_contratos                 -- Soma o valor total dos contratos desse banco e convênio
            FROM 
                tb_contrato co                             -- Tabela de contratos (apelidada como 'co')
            JOIN 
                tb_convenio_servico cs ON co.convenio_servico = cs.codigo -- Junta tb_contrato com tb_convenio_servico com base na chave estrangeira
            JOIN 
                tb_convenio c ON cs.convenio = c.codigo     -- Junta tb_convenio_servico com tb_convenio pela chave estrangeira 'convenio'
            JOIN 
                tb_banco b ON c.banco = b.codigo             -- Junta tb_convenio com tb_banco com base na chave 'banco'
            GROUP BY 
                b.nome,                                      -- Agrupa os resultados pelo nome do banco
                c.verba                                      -- Agrupa os resultados pela verba do convênio
        ";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
