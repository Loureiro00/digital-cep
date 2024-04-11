<?php

require __DIR__ . '/../vendor/autoload.php';

use \App\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddresFromZipcod('03516010');

print_r($resultado);