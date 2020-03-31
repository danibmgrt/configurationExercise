<?php

namespace src;

class ReadConfigJson
{
    public function read(): object
    {
        $jsonContent = file_get_contents(__DIR__ . '/../configToRead');
        $json = json_decode($jsonContent);
        return $json;
    }
}