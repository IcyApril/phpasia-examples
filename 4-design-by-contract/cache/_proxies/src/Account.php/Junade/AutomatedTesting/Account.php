<?php
namespace Junade\AutomatedTesting;

use PhpDeal\Annotation as Contract;
/**
 * Class Account
 * @package Junade\AutomatedTesting
 * @author https://github.com/php-deal/framework
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
                'advisor.PhpDeal\\Aspect\\PostconditionCheckerAspect->postConditionContract'
            ]
        ]
    ];
    
    /**
     * Deposits fixed amount of money to the account
     * Please don't actually use Floats for money!
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
    
}
\Go\Proxy\ClassProxy::injectJoinPoints(Account::class);