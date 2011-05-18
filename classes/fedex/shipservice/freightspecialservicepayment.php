<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifies which party will be responsible for payment of any surcharges for Freight special services for which split billing is allowed.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_FreightSpecialServicePayment
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the special service.
     *
     * @param ShipmentSpecialServiceType $SpecialService
     * return FedEx_ShipService_FreightSpecialServicePayment
     */
    public function setSpecialService(FedEx_ShipService_ShipmentSpecialServiceType $specialService)
    {
        $this->SpecialService = $specialService;
        return $this;
    }
    
    /**
     * Indicates who will pay for the special service.
     *
     * @param FreightAccountPaymentType $PaymentType
     * return FedEx_ShipService_FreightSpecialServicePayment
     */
    public function setPaymentType(FedEx_ShipService_FreightAccountPaymentType $paymentType)
    {
        $this->PaymentType = $paymentType;
        return $this;
    }
    

    
}