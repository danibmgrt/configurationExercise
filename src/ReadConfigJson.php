<?php

namespace src;

class ReadConfigJson
{
    public function read(): string
    {
        $json = json_decode(__DIR__ . '/../configToRead', true);
        return $json;
    }
}