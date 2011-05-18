<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Rate data specific to FedEx Freight or FedEx National Freight services.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_FreightRateDetail
    extends FedEx_AbstractComplexType
{

    /**
     * A unique identifier for a specific rate quotation.
     *
     * @param string $QuoteNumber
     * return FedEx_RateService_FreightRateDetail
     */
    public function setQuoteNumber($quoteNumber)
    {
        $this->QuoteNumber = $quoteNumber;
        return $this;
    }
    
    /**
     * Specifies the way in which base charges for a Freight shipment are calculated.
     *
     * @param FreightBaseChargeCalculationType $BaseChargeCalculation
     * return FedEx_RateService_FreightRateDetail
     */
    public function setBaseChargeCalculation(FedEx_RateService_FreightBaseChargeCalculationType $baseChargeCalculation)
    {
        $this->BaseChargeCalculation = $baseChargeCalculation;
        return $this;
    }
    
    /**
     * Freight charges which accumulate to the total base charge for the shipment.
     *
     * @param array[FreightBaseCharge] $BaseCharges
     * return FedEx_RateService_FreightRateDetail
     */
    public function setBaseCharges(array $baseCharges)
    {
        $this->BaseCharges = $baseCharges;
        return $this;
    }
    
    /**
     * Human-readable descriptions of additional information on this shipment rating.
     *
     * @param array[FreightRateNotation] $Notations
     * return FedEx_RateService_FreightRateDetail
     */
    public function setNotations(array $notations)
    {
        $this->Notations = $notations;
        return $this;
    }
    

    
}