<?php defined('SYSPATH') or die('No direct script access.');

/**
 * This element is currently not supported and is for the future use.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_NaftaCommodityDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Defined by NAFTA regulations.
     *
     * @param NaftaPreferenceCriterionCode $PreferenceCriterion
     * return FedEx_ShipService_NaftaCommodityDetail
     */
    public function setPreferenceCriterion(FedEx_ShipService_NaftaPreferenceCriterionCode $preferenceCriterion)
    {
        $this->PreferenceCriterion = $preferenceCriterion;
        return $this;
    }
    
    /**
     * Defined by NAFTA regulations.
     *
     * @param NaftaProducerDeterminationCode $ProducerDetermination
     * return FedEx_ShipService_NaftaCommodityDetail
     */
    public function setProducerDetermination(FedEx_ShipService_NaftaProducerDeterminationCode $producerDetermination)
    {
        $this->ProducerDetermination = $producerDetermination;
        return $this;
    }
    
    /**
     * Identification of which producer is associated with this commodity (if multiple producers are used in a single shipment).
     *
     * @param string $ProducerId
     * return FedEx_ShipService_NaftaCommodityDetail
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
     * return FedEx_ShipService_NaftaCommodityDetail
     */
    public function setNetCostMethod(FedEx_ShipService_NaftaNetCostMethodCode $netCostMethod)
    {
        $this->NetCostMethod = $netCostMethod;
        return $this;
    }
    
    /**
     * Date range over which RVC net cost was calculated.
     *
     * @param DateRange $NetCostDateRange
     * return FedEx_ShipService_NaftaCommodityDetail
     */
    public function setNetCostDateRange(FedEx_ShipService_DateRange $netCostDateRange)
    {
        $this->NetCostDateRange = $netCostDateRange;
        return $this;
    }
    

    
}