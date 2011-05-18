<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies a discount applied to the shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_Rebate
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param RebateType $RebateType
     * return FedEx_RateService_Rebate
     */
    public function setRebateType(FedEx_RateService_RebateType $rebateType)
    {
        $this->RebateType = $rebateType;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Description
     * return FedEx_RateService_Rebate
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * The amount of the discount applied to the shipment.
     *
     * @param Money $Amount
     * return FedEx_RateService_Rebate
     */
    public function setAmount(FedEx_RateService_Money $amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    
    /**
     * The percentage of the discount applied to the shipment.
     *
     * @param decimal $Percent
     * return FedEx_RateService_Rebate
     */
    public function setPercent($percent)
    {
        $this->Percent = $percent;
        return $this;
    }
    

    
}