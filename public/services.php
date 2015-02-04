<?php

$container['conexao'] = function( \Pimple\Container $container )
{
    return new \lib\Conexao(
        $container['host'],
        $container['db'],
        $container['user'],
        $container['pass']
    );
};

$container['cliente'] = function( \Pimple\Container $container ){
    return new \lib\Cliente( $container['conexao'] );
};