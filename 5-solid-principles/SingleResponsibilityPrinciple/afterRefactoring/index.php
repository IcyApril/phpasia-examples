<?php
/**
 * User: junade
 * Date: 19/02/2017
 * Time: 21:16
 */

require_once('MilesUI.php');
require_once('Calculator.php');
require_once('MilesCalculator.php');

$calculator = new MilesCalculator();

$ui = new MilesUI($calculator);
echo $ui->render();