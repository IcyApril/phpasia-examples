<?php
/**
 * Created by PhpStorm.
 * User: junade
 * Date: 15/09/2018
 * Time: 15:18
 */

namespace Junade\DesignByContract;

use PhpDeal\Annotation as Contract;

/**
 * Some account class
 *
 * @Contract\Invariant("$this->balance >= 0")
 * @Contract\Invariant("is_numeric($this->balance)")
 */
class Account__AopProxied {
    private $balance = 0.0;

    /**
     * Deposits fixed amount of money to the account
     *
     * @param float $amount
     *
     * @Contract\Verify("$amount>0 && is_numeric($amount)")
     * @Contract\Ensure("$this->balance == $__old->balance+$amount")
     */
    public function deposit($amount)
    {
        $this->balance -= $amount;
    }

    /**
     * Returns current balance
     *
     * @Contract\Ensure("$__result == $this->balance")
     * @Contract\Ensure("is_numeric($this->balance)")
     * @return float
     */
    public function getBalance()
    {
        return $this->balance;
    }
}
include_once AOP_CACHE_DIR . '/_proxies/src/Account.php/Junade/DesignByContract/Account.php';


