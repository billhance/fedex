<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specification for marking or tagging of pieces in shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_MarkingOrTaggingDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Number of pieces to be marked or tagged by FedEx.
     *
     * @param positiveInteger $Count
     * return FedEx_PickupService_MarkingOrTaggingDetail
     */
    public function setCount($count)
    {
        $this->Count = $count;
        return $this;
    }
    

    
}