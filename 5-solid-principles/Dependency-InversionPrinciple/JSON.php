<?php

/**
 * User: junade
 * Date: 09/02/2017
 * Time: 22:03
 */
class JSON implements File
{
    private $data;

    public function __construct(string $file)
    {
        $this->processFile($file);
    }

    private function processFile(string $file)
    {
        $contents     = file_get_contents($file);
        $array        = json_decode($contents);
        $arrayReverse = array_reverse($array);
        $this->data   = $arrayReverse;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function getDataByType(string $type): array
    {
        $result = [];
        $data   = $this->getData();

        foreach ($data as $entry) {
            if ($entry->type === $type) {
                array_push($result, $entry);
            }
        }

        return $result;
    }
}