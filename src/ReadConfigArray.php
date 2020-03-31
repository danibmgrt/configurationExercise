<?php

namespace src;

class ReadConfigArray implements ReadConfigInterface
{
    public function read($path): array
    {
        $arrayContent = file_get_contents($path);
        $array = explode(',', $arrayContent);
        return $array;
    }
}