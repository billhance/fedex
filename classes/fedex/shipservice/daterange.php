<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_DateRange
    extends FedEx_AbstractComplexType
{

    /**
     * The beginning date in a date range.
     *
     * @param date $Begins
     * return FedEx_ShipService_DateRange
     */
    public function setBegins($begins)
    {
        $this->Begins = $begins;
        return $this;
    }
    
    /**
     * The end date in a date range.
     *
     * @param date $Ends
     * return FedEx_ShipService_DateRange
     */
    public function setEnds($ends)
    {
        $this->Ends = $ends;
        return $this;
    }
    

    
}