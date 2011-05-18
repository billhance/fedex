<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies each tax applied to the shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_Tax
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param TaxType $TaxType
     * return FedEx_RateService_Tax
     */
    public function setTaxType(FedEx_RateService_TaxType $taxType)
    {
        $this->TaxType = $taxType;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Description
     * return FedEx_RateService_Tax
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
     * return FedEx_RateService_Tax
     */
    public function setAmount(FedEx_RateService_Money $amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    

    
}