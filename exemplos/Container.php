<?php


class Container
{

    public static function getCliente()
    {
        $cliente = new Cliente(self::getConexao());

        return $cliente;
    }

    public static function getConexao()
    {
        $conexao = new Conexao('localhost', 'silex', 'root', 'root');

        return $conexao;
    }

} 