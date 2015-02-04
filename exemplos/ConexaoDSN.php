<?php

require_once 'ConexaoInterface.php';

class ConexaoDSN implements ConexaoInterface
{
    private $dsn;
    private $user;
    private $pass;

    public function __construct( $dsn, $user, $pass )
    {
        $this->dsn = $dsn;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function connect()
    {
        return new \PDO($this->dsn, $this->user, $this->pass);
    }
}