<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Individual charge which contributes to the total base charge for the shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_FreightBaseCharge
    extends FedEx_AbstractComplexType
{

    /**
     * Freight class for this line item.
     *
     * @param FreightClassType $FreightClass
     * return FedEx_RateService_FreightBaseCharge
     */
    public function setFreightClass(FedEx_RateService_FreightClassType $freightClass)
    {
        $this->FreightClass = $freightClass;
        return $this;
    }
    
    /**
     * Effective freight class used for rating this line item.
     *
     * @param FreightClassType $RatedAsClass
     * return FedEx_RateService_FreightBaseCharge
     */
    public function setRatedAsClass(FedEx_RateService_FreightClassType $ratedAsClass)
    {
        $this->RatedAsClass = $ratedAsClass;
        return $this;
    }
    
    /**
     * NMFC Code for commodity.
     *
     * @param string $NmfcCode
     * return FedEx_RateService_FreightBaseCharge
     */
    public function setNmfcCode($nmfcCode)
    {
        $this->NmfcCode = $nmfcCode;
        return $this;
    }
    
    /**
     * Customer-provided description for this commodity or class line.
     *
     * @param string $Description
     * return FedEx_RateService_FreightBaseCharge
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Weight for this commodity or class line.
     *
     * @param Weight $Weight
     * return FedEx_RateService_FreightBaseCharge
     */
    public function setWeight(FedEx_RateService_Weight $weight)
    {
        $this->Weight = $weight;
        return $this;
    }
    
    /**
     * Rate or factor applied to this line item.
     *
     * @param Money $ChargeRate
     * return FedEx_RateService_FreightBaseCharge
     */
    public function setChargeRate(FedEx_RateService_Money $chargeRate)
    {
        $this->ChargeRate = $chargeRate;
        return $this;
    }
    
    /**
     * Identifies the manner in which the chargeRate for this line item was applied.
     *
     * @param FreightChargeBasisType $ChargeBasis
     * return FedEx_RateService_FreightBaseCharge
     */
    public function setChargeBasis(FedEx_RateService_FreightChargeBasisType $chargeBasis)
    {
        $this->ChargeBasis = $chargeBasis;
        return $this;
    }
    
    /**
     * The net or extended charge for this line item.
     *
     * @param Money $ExtendedAmount
     * return FedEx_RateService_FreightBaseCharge
     */
    public function setExtendedAmount(FedEx_RateService_Money $extendedAmount)
    {
        $this->ExtendedAmount = $extendedAmount;
        return $this;
    }
    

    
}