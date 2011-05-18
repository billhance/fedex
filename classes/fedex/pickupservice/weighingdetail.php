<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifies a single type of weighing performed on a shipment
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_WeighingDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Type of scale used
     *
     * @param WeighingScaleType $Type
     * return FedEx_PickupService_WeighingDetail
     */
    public function setType(FedEx_PickupService_WeighingScaleType $type)
    {
        $this->Type = $type;
        return $this;
    }
    

    
}