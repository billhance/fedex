<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifies the usage of a single type of special equipment while loading/unloading a shipment
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_SpecialEquipmentLineItem
    extends FedEx_AbstractComplexType
{

    /**
     * Type of equipment used
     *
     * @param SpecialEquipmentType $Type
     * return FedEx_PickupService_SpecialEquipmentLineItem
     */
    public function setType(FedEx_PickupService_SpecialEquipmentType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Total amount of time the equipment was used
     *
     * @param duration $Duration
     * return FedEx_PickupService_SpecialEquipmentLineItem
     */
    public function setDuration($duration)
    {
        $this->Duration = $duration;
        return $this;
    }
    

    
}