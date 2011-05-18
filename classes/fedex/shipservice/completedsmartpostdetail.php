<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Provides reply information specific to SmartPost shipments.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_CompletedSmartPostDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the carrier that will pick up the SmartPost shipment.
     *
     * @param CarrierCodeType $PickUpCarrier
     * return FedEx_ShipService_CompletedSmartPostDetail
     */
    public function setPickUpCarrier(FedEx_ShipService_CarrierCodeType $pickUpCarrier)
    {
        $this->PickUpCarrier = $pickUpCarrier;
        return $this;
    }
    
    /**
     * Indicates whether the shipment is deemed to be machineable, based on dimensions, weight, and packaging.
     *
     * @param boolean $Machinable
     * return FedEx_ShipService_CompletedSmartPostDetail
     */
    public function setMachinable($machinable)
    {
        $this->Machinable = $machinable;
        return $this;
    }
    

    
}