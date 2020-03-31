<?php

namespace src;

class ReadConfigJson
{
    public function read($path): object
    {
        $jsonContent = file_get_contents($path);
        $json = json_decode($jsonContent);
        return $json;
    }
}