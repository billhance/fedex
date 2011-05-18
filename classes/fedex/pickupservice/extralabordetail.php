<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specification for labor time spent handling shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_ExtraLaborDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Total labor time.
     *
     * @param duration $Duration
     * return FedEx_PickupService_ExtraLaborDetail
     */
    public function setDuration($duration)
    {
        $this->Duration = $duration;
        return $this;
    }
    

    
}