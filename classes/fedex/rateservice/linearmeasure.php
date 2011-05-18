<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Represents a one-dimensional measurement in small units (e.g. suitable for measuring a package or document), contrasted with Distance, which represents a large one-dimensional measurement (e.g. distance between cities).
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_LinearMeasure
    extends FedEx_AbstractComplexType
{

    /**
     * The numerical quantity of this measurement.
     *
     * @param decimal $Value
     * return FedEx_RateService_LinearMeasure
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    
    /**
     * The units for this measurement.
     *
     * @param LinearUnits $Units
     * return FedEx_RateService_LinearMeasure
     */
    public function setUnits(FedEx_RateService_LinearUnits $units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}