<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data for the monetary compensation given to FedEx for services rendered to the customer.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_Payment
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the method of payment for a service. See PaymentType for list of valid enumerated values.
     *
     * @param PaymentType $PaymentType
     * return FedEx_RateService_Payment
     */
    public function setPaymentType(FedEx_RateService_PaymentType $paymentType)
    {
        $this->PaymentType = $paymentType;
        return $this;
    }
    
    /**
     * Descriptive data identifying the party responsible for payment for a service.
     *
     * @param Payor $Payor
     * return FedEx_RateService_Payment
     */
    public function setPayor(FedEx_RateService_Payor $payor)
    {
        $this->Payor = $payor;
        return $this;
    }
    

    
}