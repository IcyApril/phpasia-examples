<?php
/**
 * User: junade
 * Date: 09/02/2017
 * Time: 21:15
 */

require_once('File.php');
require_once('JSON.php');
require_once('Link.php');

$data = new JSON('data.json');
$link = new Link($data);

foreach ($link->getContent() as $content) {
    echo $content. "\n";
}