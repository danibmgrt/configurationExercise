<?php

namespace src;

class WriteConfigArray implements WriteConfigInterface
{
    public function write($writeArrayConfigPath, $yourTextArrayPath): void
    {
        $contentArray = file_get_contents($yourTextArrayPath);
        file_put_contents($writeArrayConfigPath, $contentArray);
    }
}