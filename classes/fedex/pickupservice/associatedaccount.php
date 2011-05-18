<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_AssociatedAccount
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param AssociatedAccountNumberType $Type
     * return FedEx_PickupService_AssociatedAccount
     */
    public function setType(FedEx_PickupService_AssociatedAccountNumberType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $AccountNumber
     * return FedEx_PickupService_AssociatedAccount
     */
    public function setAccountNumber($accountNumber)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    

    
}