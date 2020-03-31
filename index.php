<?php

require __DIR__ . "/vendor/autoload.php";

use src\ReadConfigJson;
use src\ReadConfigArray;
use src\WriteConfigJson;

$jsonPath = __DIR__ . "/configToRead";
$readJson = new ReadConfigJson();
$jsonValues = $readJson->read($jsonPath);
var_dump($jsonValues);

$arrayPath = __DIR__ . "/array.txt";
$readArray = new ReadConfigArray();
$arrayValue = $readArray->read($arrayPath);
var_dump($arrayValue);


