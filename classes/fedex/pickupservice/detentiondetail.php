<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifications for pup/set or vehicle delayed for loading or unloading.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_DetentionDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Amount of time involved in the detention.
     *
     * @param duration $Duration
     * return FedEx_PickupService_DetentionDetail
     */
    public function setDuration($duration)
    {
        $this->Duration = $duration;
        return $this;
    }
    

    
}