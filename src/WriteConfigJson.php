<?php

namespace src;

class WriteConfigJson
{
    public function write($path, $yourTextPath): void
    {
        $yourText = file_get_contents($yourTextPath);
        file_put_contents($path, $yourText);
    }
}