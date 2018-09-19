<?php
/**
 * Created by PhpStorm.
 * User: junade
 * Date: 19/09/2018
 * Time: 18:25
 */

require_once('vendor/autoload.php');

use PhpDeal\ContractApplication;

ContractApplication::getInstance()->init(array(
    'debug'    => true,
    'appDir'   => __DIR__,
    'cacheDir' => __DIR__.'/cache/',
    'excludePaths' => [__DIR__.'/vendor/'],
));

$account = new \Junade\DesignByContract\Account();
$account->deposit(5.0);

echo $account->getBalance().PHP_EOL;