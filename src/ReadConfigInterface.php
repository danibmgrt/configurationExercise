<?php

namespace src;

interface ReadConfigInterface
{
    public function read($path): array ;
}