<?php

namespace src;

interface WriteConfigInterface
{
    public function write($writeArrayConfigPath, $yourTextArrayPath): void;
}