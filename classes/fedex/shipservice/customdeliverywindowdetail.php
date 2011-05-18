<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_CustomDeliveryWindowDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Indicates the type of custom delivery being requested.
     *
     * @param CustomDeliveryWindowType $Type
     * return FedEx_ShipService_CustomDeliveryWindowDetail
     */
    public function setType(FedEx_ShipService_CustomDeliveryWindowType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Time by which delivery is requested.
     *
     * @param time $RequestTime
     * return FedEx_ShipService_CustomDeliveryWindowDetail
     */
    public function setRequestTime($requestTime)
    {
        $this->RequestTime = $requestTime;
        return $this;
    }
    
    /**
     * Range of dates for custom delivery request; only used if type is BETWEEN.
     *
     * @param DateRange $RequestRange
     * return FedEx_ShipService_CustomDeliveryWindowDetail
     */
    public function setRequestRange(FedEx_ShipService_DateRange $requestRange)
    {
        $this->RequestRange = $requestRange;
        return $this;
    }
    
    /**
     * Date for custom delivery request; only used for types of ON, BETWEEN, or AFTER.
     *
     * @param date $RequestDate
     * return FedEx_ShipService_CustomDeliveryWindowDetail
     */
    public function setRequestDate($requestDate)
    {
        $this->RequestDate = $requestDate;
        return $this;
    }
    

    
}