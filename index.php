<?php

require __DIR__ . "/vendor/autoload.php";

use src\ReadConfigJson;
use src\ReadConfigArray;
use src\WriteConfigJson;
use src\WriteConfigArray;

$jsonPath = __DIR__ . "/configToRead";
$readJson = new ReadConfigJson();
$jsonValues = $readJson->read($jsonPath);
var_dump($jsonValues);

$arrayPath = __DIR__ . "/array.txt";
$readArray = new ReadConfigArray();
$arrayValue = $readArray->read($arrayPath);
var_dump($arrayValue);

$writeJsonPath = __DIR__ . "/writeJsonConfig.json";
$yourTextPath = __DIR__ . "/yourText.json";
$writeJson = new WriteConfigJson();
$writeJson->write($writeJsonPath, $yourTextPath);

$writeArrayPath = __DIR__ . "/writeArrayConfig.json";
$yourArrayTextPath = __DIR__ . "/yourTextArray.txt";
$writeArray = new WriteConfigArray();
$writeArray->write($writeArrayPath, $yourArrayTextPath);
