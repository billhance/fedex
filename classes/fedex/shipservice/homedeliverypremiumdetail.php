<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data required by FedEx for home delivery services.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_HomeDeliveryPremiumDetail
    extends FedEx_AbstractComplexType
{

    /**
     * The type of Home Delivery Premium service being requested.
     *
     * @param HomeDeliveryPremiumType $HomeDeliveryPremiumType
     * return FedEx_ShipService_HomeDeliveryPremiumDetail
     */
    public function setHomeDeliveryPremiumType(FedEx_ShipService_HomeDeliveryPremiumType $homeDeliveryPremiumType)
    {
        $this->HomeDeliveryPremiumType = $homeDeliveryPremiumType;
        return $this;
    }
    
    /**
     * Required for Date Certain Home Delivery.
     *
     * @param date $Date
     * return FedEx_ShipService_HomeDeliveryPremiumDetail
     */
    public function setDate($date)
    {
        $this->Date = $date;
        return $this;
    }
    
    /**
     * Required for Date Certain and Appointment Home Delivery.
     *
     * @param string $PhoneNumber
     * return FedEx_ShipService_HomeDeliveryPremiumDetail
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    

    
}