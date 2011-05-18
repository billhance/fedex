<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specification for special equipment used in loading/unloading shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_SpecialEquipmentDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Contains an entry for each type of special equipment used with shipment
     *
     * @param array[SpecialEquipmentLineItem] $LineItems
     * return FedEx_PickupService_SpecialEquipmentDetail
     */
    public function setLineItems(array $lineItems)
    {
        $this->LineItems = $lineItems;
        return $this;
    }
    

    
}