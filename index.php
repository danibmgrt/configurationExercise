<?php

require __DIR__ . "/vendor/autoload.php";

use src\ReadConfigJson;
use src\ReadConfigArray;
use src\WriteConfigJson;

$jsonPath = __DIR__ . "/configToRead";
$readJson = new ReadConfigJson();
$jsonValues = $readJson->read($jsonPath);
var_dump($jsonValues);
