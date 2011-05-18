<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_NaftaCommodityDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Defined by NAFTA regulations.
     *
     * @param NaftaPreferenceCriterionCode $PreferenceCriterion
     * return FedEx_RateService_NaftaCommodityDetail
     */
    public function setPreferenceCriterion(FedEx_RateService_NaftaPreferenceCriterionCode $preferenceCriterion)
    {
        $this->PreferenceCriterion = $preferenceCriterion;
        return $this;
    }
    
    /**
     * Defined by NAFTA regulations.
     *
     * @param NaftaProducerDeterminationCode $ProducerDetermination
     * return FedEx_RateService_NaftaCommodityDetail
     */
    public function setProducerDetermination(FedEx_RateService_NaftaProducerDeterminationCode $producerDetermination)
    {
        $this->ProducerDetermination = $producerDetermination;
        return $this;
    }
    
    /**
     * Identification of which producer is associated with this commodity (if multiple producers are used in a single shipment).
     *
     * @param string $ProducerId
     * return FedEx_RateService_NaftaCommodityDetail
     */
    public function setProducerId($producerId)
    {
        $this->ProducerId = $producerId;
        return $this;
    }
    
    /**
     * 
     *
     * @param NaftaNetCostMethodCode $NetCostMethod
     * return FedEx_RateService_NaftaCommodityDetail
     */
    public function setNetCostMethod(FedEx_RateService_NaftaNetCostMethodCode $netCostMethod)
    {
        $this->NetCostMethod = $netCostMethod;
        return $this;
    }
    
    /**
     * Date range over which RVC net cost was calculated.
     *
     * @param DateRange $NetCostDateRange
     * return FedEx_RateService_NaftaCommodityDetail
     */
    public function setNetCostDateRange(FedEx_RateService_DateRange $netCostDateRange)
    {
        $this->NetCostDateRange = $netCostDateRange;
        return $this;
    }
    

    
}