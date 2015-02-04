<?php

namespace lib;

class Cliente
{
    private $db;

    public function __construct( ConexaoInterface $conexao )
    {
        $this->db = $conexao->connect();
    }

    public function listar()
    {
        $query = "Select * from pessoas";
        $stm = $this->db->prepare($query);
        $stm->execute();

        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }
} 