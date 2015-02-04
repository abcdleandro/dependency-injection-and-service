<?php

namespace lib;

class Conexao implements ConexaoInterface
{
    private $host;
    private $db;
    private $user;
    private $pass;

    public function __construct( $host, $db, $user, $pass )
    {
        $this->host = $host;
        $this->db   = $db;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function connect()
    {
        $db = new \PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
        return $db;
    }
}



