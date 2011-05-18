<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_EdtCommodityTax
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param string $HarmonizedCode
     * return FedEx_ShipService_EdtCommodityTax
     */
    public function setHarmonizedCode($harmonizedCode)
    {
        $this->HarmonizedCode = $harmonizedCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[EdtTaxDetail] $Taxes
     * return FedEx_ShipService_EdtCommodityTax
     */
    public function setTaxes(array $taxes)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    

    
}