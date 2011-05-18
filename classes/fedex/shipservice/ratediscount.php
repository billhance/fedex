<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies a discount applied to the shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_RateDiscount
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the type of discount applied to the shipment.
     *
     * @param RateDiscountType $RateDiscountType
     * return FedEx_ShipService_RateDiscount
     */
    public function setRateDiscountType(FedEx_ShipService_RateDiscountType $rateDiscountType)
    {
        $this->RateDiscountType = $rateDiscountType;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Description
     * return FedEx_ShipService_RateDiscount
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
     * return FedEx_ShipService_RateDiscount
     */
    public function setAmount(FedEx_ShipService_Money $amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    
    /**
     * The percentage of the discount applied to the shipment.
     *
     * @param decimal $Percent
     * return FedEx_ShipService_RateDiscount
     */
    public function setPercent($percent)
    {
        $this->Percent = $percent;
        return $this;
    }
    

    
}