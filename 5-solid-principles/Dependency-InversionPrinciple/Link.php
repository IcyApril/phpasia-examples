<?php

/**
 * User: junade
 * Date: 09/02/2017
 * Time: 23:03
 */
class Link
{
    private $data;

    public function __construct(File $data)
    {
        $this->data = $data;
    }

    public function getContent(): Generator
    {
        $links = $this->data->getDataByType('link');

        foreach ($links as $link) {
            yield $link->text;
        }
    }
}