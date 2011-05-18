<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_CustomLabelPosition
    extends FedEx_AbstractComplexType
{

    /**
     * Horizontal position, relative to left edge of custom area.
     *
     * @param nonNegativeInteger $X
     * return FedEx_ShipService_CustomLabelPosition
     */
    public function setX($x)
    {
        $this->X = $x;
        return $this;
    }
    
    /**
     * Vertical position, relative to top edge of custom area.
     *
     * @param nonNegativeInteger $Y
     * return FedEx_ShipService_CustomLabelPosition
     */
    public function setY($y)
    {
        $this->Y = $y;
        return $this;
    }
    

    
}