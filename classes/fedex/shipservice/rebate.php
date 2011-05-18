<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_Rebate
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param RebateType $RebateType
     * return FedEx_ShipService_Rebate
     */
    public function setRebateType(FedEx_ShipService_RebateType $rebateType)
    {
        $this->RebateType = $rebateType;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Description
     * return FedEx_ShipService_Rebate
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * 
     *
     * @param Money $Amount
     * return FedEx_ShipService_Rebate
     */
    public function setAmount(FedEx_ShipService_Money $amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    
    /**
     * 
     *
     * @param decimal $Percent
     * return FedEx_ShipService_Rebate
     */
    public function setPercent($percent)
    {
        $this->Percent = $percent;
        return $this;
    }
    

    
}