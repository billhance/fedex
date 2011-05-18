<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifies details for origin-country LTL services performed by FedEx.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_TransborderDistributionLtlDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Payment for LTL transportation.
     *
     * @param Payment $Payment
     * return FedEx_PickupService_TransborderDistributionLtlDetail
     */
    public function setPayment(FedEx_PickupService_Payment $payment)
    {
        $this->Payment = $payment;
        return $this;
    }
    

    
}