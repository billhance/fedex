<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data for the heaviness of an object.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_Weight
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the unit of measure associated with a weight value. See WeightUnits for the list of valid enumerated values.
     *
     * @param WeightUnits $Units
     * return FedEx_RateService_Weight
     */
    public function setUnits(FedEx_RateService_WeightUnits $units)
    {
        $this->Units = $units;
        return $this;
    }
    
    /**
     * Identifies the weight value of the package/shipment. Contains 1 explicit decimal position
     *
     * @param decimal $Value
     * return FedEx_RateService_Weight
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}