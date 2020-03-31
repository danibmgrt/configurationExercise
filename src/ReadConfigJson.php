<?php

namespace src;

class ReadConfigJson implements ReadConfigInterface
{
    public function read($path): array
    {
        $jsonContent = file_get_contents($path);
        $json = json_decode($jsonContent);
        $jsonArray = (array) $json;
        return $jsonArray;
    }
}