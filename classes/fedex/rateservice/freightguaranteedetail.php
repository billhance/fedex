<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_FreightGuaranteeDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param FreightGuaranteeType $Type
     * return FedEx_RateService_FreightGuaranteeDetail
     */
    public function setType(FedEx_RateService_FreightGuaranteeType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Date for all Freight guarantee types.
     *
     * @param date $Date
     * return FedEx_RateService_FreightGuaranteeDetail
     */
    public function setDate($date)
    {
        $this->Date = $date;
        return $this;
    }
    
    /**
     * Time for GUARANTEED_TIME only.
     *
     * @param time $Time
     * return FedEx_RateService_FreightGuaranteeDetail
     */
    public function setTime($time)
    {
        $this->Time = $time;
        return $this;
    }
    

    
}