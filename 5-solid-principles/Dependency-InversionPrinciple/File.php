<?php

/**
 * User: junade
 * Date: 01/03/2017
 * Time: 17:57
 */
interface File
{
    public function __construct(string $file);

    public function getData(): array;

    public function getDataByType(string $type): array;
}