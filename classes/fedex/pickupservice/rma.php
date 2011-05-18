<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Return Merchant Authorization
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_Rma
    extends FedEx_AbstractComplexType
{

    /**
     * The RMA number.
     *
     * @param string $Number
     * return FedEx_PickupService_Rma
     */
    public function setNumber($number)
    {
        $this->Number = $number;
        return $this;
    }
    
    /**
     * The reason for the return.
     *
     * @param string $Reason
     * return FedEx_PickupService_Rma
     */
    public function setReason($reason)
    {
        $this->Reason = $reason;
        return $this;
    }
    

    
}