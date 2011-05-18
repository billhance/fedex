<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_TrackingId
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param TrackingIdType $TrackingIdType
     * return FedEx_PickupService_TrackingId
     */
    public function setTrackingIdType(FedEx_PickupService_TrackingIdType $trackingIdType)
    {
        $this->TrackingIdType = $trackingIdType;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $FormId
     * return FedEx_PickupService_TrackingId
     */
    public function setFormId($formId)
    {
        $this->FormId = $formId;
        return $this;
    }
    
    /**
     * For use with SmartPost tracking IDs only
     *
     * @param string $UspsApplicationId
     * return FedEx_PickupService_TrackingId
     */
    public function setUspsApplicationId($uspsApplicationId)
    {
        $this->UspsApplicationId = $uspsApplicationId;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $TrackingNumber
     * return FedEx_PickupService_TrackingId
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    

    
}