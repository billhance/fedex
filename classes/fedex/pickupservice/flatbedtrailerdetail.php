<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifies the optional features/characteristics requested for a Freight shipment utilizing a flatbed trailer.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_FlatbedTrailerDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Specifies the optional features/characteristics requested for a Freight shipment utilizing a flatbed trailer.
     *
     * @param array[FlatbedTrailerOption] $Options
     * return FedEx_PickupService_FlatbedTrailerDetail
     */
    public function setOptions(array $options)
    {
        $this->Options = $options;
        return $this;
    }
    

    
}