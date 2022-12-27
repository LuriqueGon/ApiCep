<?php

require "vendor/autoload.php";

use Src\ApiCEP\Search;

$search = new Search();

$resultado = $search->getAdressFromZipCode('53540010');

var_dump($resultado);