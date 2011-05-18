<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_CompletedHoldAtLocationDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the branded location name, the hold at location phone number and the address of the location.
     *
     * @param ContactAndAddress $HoldingLocation
     * return FedEx_ShipService_CompletedHoldAtLocationDetail
     */
    public function setHoldingLocation(FedEx_ShipService_ContactAndAddress $holdingLocation)
    {
        $this->HoldingLocation = $holdingLocation;
        return $this;
    }
    
    /**
     * Identifies the type of FedEx location.
     *
     * @param FedExLocationType $HoldingLocationType
     * return FedEx_ShipService_CompletedHoldAtLocationDetail
     */
    public function setHoldingLocationType(FedEx_ShipService_FedExLocationType $holdingLocationType)
    {
        $this->HoldingLocationType = $holdingLocationType;
        return $this;
    }
    

    
}