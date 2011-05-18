<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Information about why a shipment delivery is delayed and at what level( country/service etc.).
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_DelayDetail
    extends FedEx_AbstractComplexType
{

    /**
     * The date of the delay
     *
     * @param date $Date
     * return FedEx_RateService_DelayDetail
     */
    public function setDate($date)
    {
        $this->Date = $date;
        return $this;
    }
    
    /**
     * 
     *
     * @param DayOfWeekType $DayOfWeek
     * return FedEx_RateService_DelayDetail
     */
    public function setDayOfWeek(FedEx_RateService_DayOfWeekType $dayOfWeek)
    {
        $this->DayOfWeek = $dayOfWeek;
        return $this;
    }
    
    /**
     * The attribute of the shipment that caused the delay(e.g. Country, City, LocationId, Zip, service area, special handling )
     *
     * @param DelayLevelType $Level
     * return FedEx_RateService_DelayDetail
     */
    public function setLevel(FedEx_RateService_DelayLevelType $level)
    {
        $this->Level = $level;
        return $this;
    }
    
    /**
     * The point where the delay is occurring (e.g. Origin, Destination, Broker location)
     *
     * @param DelayPointType $Point
     * return FedEx_RateService_DelayDetail
     */
    public function setPoint(FedEx_RateService_DelayPointType $point)
    {
        $this->Point = $point;
        return $this;
    }
    
    /**
     * The reason for the delay (e.g. holiday, weekend, etc.).
     *
     * @param CommitmentDelayType $Type
     * return FedEx_RateService_DelayDetail
     */
    public function setType(FedEx_RateService_CommitmentDelayType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * The name of the holiday in that country that is causing the delay.
     *
     * @param string $Description
     * return FedEx_RateService_DelayDetail
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    

    
}