<?php

require __DIR__ . "/vendor/autoload.php";

use src\ReadConfigJson;
use src\WriteConfigJson;

$readJson = new ReadConfigJson();
$jsonValues = $readJson->read();
var_dump($jsonValues);
