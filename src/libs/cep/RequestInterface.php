<?php
namespace src\libs\cep;

interface RequestInterface
{
    public function get(string $url): array;
}
