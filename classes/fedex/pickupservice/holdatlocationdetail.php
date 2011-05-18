<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Descriptive data required for a FedEx shipment that is to be held at the destination FedEx location for pickup by the recipient.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_HoldAtLocationDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Contact phone number for recipient of shipment.
     *
     * @param string $PhoneNumber
     * return FedEx_PickupService_HoldAtLocationDetail
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    
    /**
     * Contact and address of FedEx facility at which shipment is to be held.
     *
     * @param ContactAndAddress $LocationContactAndAddress
     * return FedEx_PickupService_HoldAtLocationDetail
     */
    public function setLocationContactAndAddress(FedEx_PickupService_ContactAndAddress $locationContactAndAddress)
    {
        $this->LocationContactAndAddress = $locationContactAndAddress;
        return $this;
    }
    
    /**
     * Type of facility at which package/shipment is to be held.
     *
     * @param FedExLocationType $LocationType
     * return FedEx_PickupService_HoldAtLocationDetail
     */
    public function setLocationType(FedEx_PickupService_FedExLocationType $locationType)
    {
        $this->LocationType = $locationType;
        return $this;
    }
    
    /**
     * Location identification (for facilities identified by an alphanumeric location code).
     *
     * @param string $LocationId
     * return FedEx_PickupService_HoldAtLocationDetail
     */
    public function setLocationId($locationId)
    {
        $this->LocationId = $locationId;
        return $this;
    }
    
    /**
     * Location identification (for facilities identified by an numeric location code).
     *
     * @param int $LocationNumber
     * return FedEx_PickupService_HoldAtLocationDetail
     */
    public function setLocationNumber($locationNumber)
    {
        $this->LocationNumber = $locationNumber;
        return $this;
    }
    

    
}