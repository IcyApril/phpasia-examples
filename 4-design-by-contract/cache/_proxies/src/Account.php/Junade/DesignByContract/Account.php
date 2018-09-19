<?php
namespace Junade\DesignByContract;

use PhpDeal\Annotation as Contract;
/**
 * Some account class
 *
 * @Contract\Invariant("$this->balance >= 0")
 * @Contract\Invariant("is_numeric($this->balance)")
 */
class Account extends Account__AopProxied implements \Go\Aop\Proxy
{

    /**
     * Property was created automatically, do not change it manually
     */
    private static $__joinPoints = [
        'method' => [
            'deposit' => [
                'advisor.PhpDeal\\Aspect\\PreconditionCheckerAspect->preConditionContract',
                'advisor.PhpDeal\\Aspect\\InvariantCheckerAspect->invariantContract',
                'advisor.PhpDeal\\Aspect\\PostconditionCheckerAspect->postConditionContract'
            ],
            'getBalance' => [
                'advisor.PhpDeal\\Aspect\\InvariantCheckerAspect->invariantContract',
                'advisor.PhpDeal\\Aspect\\PostconditionCheckerAspect->postConditionContract'
            ]
        ]
    ];
    
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
        return self::$__joinPoints['method:deposit']->__invoke($this, [$amount]);
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
        return self::$__joinPoints['method:getBalance']->__invoke($this);
    }
    
}
\Go\Proxy\ClassProxy::injectJoinPoints(Account::class);