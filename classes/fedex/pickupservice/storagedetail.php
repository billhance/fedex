<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specification for storage provided for shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_StorageDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Total time shipment is held by carrier.
     *
     * @param duration $Duration
     * return FedEx_PickupService_StorageDetail
     */
    public function setDuration($duration)
    {
        $this->Duration = $duration;
        return $this;
    }
    

    
}