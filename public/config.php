<?php

use Pimple\Container;

$container = new Container();

$container['host'] = 'localhost';
$container['db']   = 'silex';
$container['user'] = 'root';
$container['pass'] = 'root';