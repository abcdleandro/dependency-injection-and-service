<?php

require_once '../vendor/autoload.php';
require_once 'config.php';
require_once 'services.php';

$cliente = $container['cliente'];

$listaCliente = $cliente->listar();

require_once '../app/views/clientes.list.php';










