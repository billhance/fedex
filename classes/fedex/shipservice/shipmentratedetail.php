<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Data for a shipment's total/summary rates, as calculated per a specific rate type. The "total..." fields may differ from the sum of corresponding package data for Multiweight or Express MPS.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_ShipmentRateDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Type used for this specific set of rate data.
     *
     * @param ReturnedRateType $RateType
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setRateType(FedEx_ShipService_ReturnedRateType $rateType)
    {
        $this->RateType = $rateType;
        return $this;
    }
    
    /**
     * Indicates the rate scale used.
     *
     * @param string $RateScale
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setRateScale($rateScale)
    {
        $this->RateScale = $rateScale;
        return $this;
    }
    
    /**
     * Indicates the rate zone used (based on origin and destination).
     *
     * @param string $RateZone
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setRateZone($rateZone)
    {
        $this->RateZone = $rateZone;
        return $this;
    }
    
    /**
     * Identifies the type of pricing used for this shipment.
     *
     * @param PricingCodeType $PricingCode
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setPricingCode(FedEx_ShipService_PricingCodeType $pricingCode)
    {
        $this->PricingCode = $pricingCode;
        return $this;
    }
    
    /**
     * Indicates which weight was used.
     *
     * @param RatedWeightMethod $RatedWeightMethod
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setRatedWeightMethod(FedEx_ShipService_RatedWeightMethod $ratedWeightMethod)
    {
        $this->RatedWeightMethod = $ratedWeightMethod;
        return $this;
    }
    
    /**
     * INTERNAL FEDEX USE ONLY.
     *
     * @param MinimumChargeType $MinimumChargeType
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setMinimumChargeType(FedEx_ShipService_MinimumChargeType $minimumChargeType)
    {
        $this->MinimumChargeType = $minimumChargeType;
        return $this;
    }
    
    /**
     * Specifies the currency exchange performed on financial amounts for this rate.
     *
     * @param CurrencyExchangeRate $CurrencyExchangeRate
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setCurrencyExchangeRate(FedEx_ShipService_CurrencyExchangeRate $currencyExchangeRate)
    {
        $this->CurrencyExchangeRate = $currencyExchangeRate;
        return $this;
    }
    
    /**
     * Indicates which special rating cases applied to this shipment.
     *
     * @param array[SpecialRatingAppliedType] $SpecialRatingApplied
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setSpecialRatingApplied(array $specialRatingApplied)
    {
        $this->SpecialRatingApplied = $specialRatingApplied;
        return $this;
    }
    
    /**
     * The value used to calculate the weight based on the dimensions.
     *
     * @param nonNegativeInteger $DimDivisor
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setDimDivisor($dimDivisor)
    {
        $this->DimDivisor = $dimDivisor;
        return $this;
    }
    
    /**
     * Identifies the type of dim divisor that was applied.
     *
     * @param RateDimensionalDivisorType $DimDivisorType
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setDimDivisorType(FedEx_ShipService_RateDimensionalDivisorType $dimDivisorType)
    {
        $this->DimDivisorType = $dimDivisorType;
        return $this;
    }
    
    /**
     * Specifies a fuel surcharge percentage.
     *
     * @param decimal $FuelSurchargePercent
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setFuelSurchargePercent($fuelSurchargePercent)
    {
        $this->FuelSurchargePercent = $fuelSurchargePercent;
        return $this;
    }
    
    /**
     * The weight used to calculate these rates.
     *
     * @param Weight $TotalBillingWeight
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setTotalBillingWeight(FedEx_ShipService_Weight $totalBillingWeight)
    {
        $this->TotalBillingWeight = $totalBillingWeight;
        return $this;
    }
    
    /**
     * Sum of dimensional weights for all packages.
     *
     * @param Weight $TotalDimWeight
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setTotalDimWeight(FedEx_ShipService_Weight $totalDimWeight)
    {
        $this->TotalDimWeight = $totalDimWeight;
        return $this;
    }
    
    /**
     * The total freight charge that was calculated for this package before surcharges, discounts and taxes.
     *
     * @param Money $TotalBaseCharge
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setTotalBaseCharge(FedEx_ShipService_Money $totalBaseCharge)
    {
        $this->TotalBaseCharge = $totalBaseCharge;
        return $this;
    }
    
    /**
     * The total discounts used in the rate calculation.
     *
     * @param Money $TotalFreightDiscounts
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setTotalFreightDiscounts(FedEx_ShipService_Money $totalFreightDiscounts)
    {
        $this->TotalFreightDiscounts = $totalFreightDiscounts;
        return $this;
    }
    
    /**
     * The freight charge minus discounts.
     *
     * @param Money $TotalNetFreight
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setTotalNetFreight(FedEx_ShipService_Money $totalNetFreight)
    {
        $this->TotalNetFreight = $totalNetFreight;
        return $this;
    }
    
    /**
     * The total amount of all surcharges applied to this shipment.
     *
     * @param Money $TotalSurcharges
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setTotalSurcharges(FedEx_ShipService_Money $totalSurcharges)
    {
        $this->TotalSurcharges = $totalSurcharges;
        return $this;
    }
    
    /**
     * This shipment's totalNetFreight + totalSurcharges (not including totalTaxes).
     *
     * @param Money $TotalNetFedExCharge
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setTotalNetFedExCharge(FedEx_ShipService_Money $totalNetFedExCharge)
    {
        $this->TotalNetFedExCharge = $totalNetFedExCharge;
        return $this;
    }
    
    /**
     * Total of the transportation-based taxes.
     *
     * @param Money $TotalTaxes
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setTotalTaxes(FedEx_ShipService_Money $totalTaxes)
    {
        $this->TotalTaxes = $totalTaxes;
        return $this;
    }
    
    /**
     * The net charge after applying all discounts and surcharges.
     *
     * @param Money $TotalNetCharge
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setTotalNetCharge(FedEx_ShipService_Money $totalNetCharge)
    {
        $this->TotalNetCharge = $totalNetCharge;
        return $this;
    }
    
    /**
     * The total sum of all rebates applied to this shipment.
     *
     * @param Money $TotalRebates
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setTotalRebates(FedEx_ShipService_Money $totalRebates)
    {
        $this->TotalRebates = $totalRebates;
        return $this;
    }
    
    /**
     * Total of all values under this shipment's dutiesAndTaxes; only provided if estimated duties and taxes were calculated for this shipment.
     *
     * @param Money $TotalDutiesAndTaxes
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setTotalDutiesAndTaxes(FedEx_ShipService_Money $totalDutiesAndTaxes)
    {
        $this->TotalDutiesAndTaxes = $totalDutiesAndTaxes;
        return $this;
    }
    
    /**
     * This shipment's totalNetCharge + totalDutiesAndTaxes; only provided if estimated duties and taxes were calculated for this shipment AND duties, taxes and transportation charges are all paid by the same sender's account.
     *
     * @param Money $TotalNetChargeWithDutiesAndTaxes
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setTotalNetChargeWithDutiesAndTaxes(FedEx_ShipService_Money $totalNetChargeWithDutiesAndTaxes)
    {
        $this->TotalNetChargeWithDutiesAndTaxes = $totalNetChargeWithDutiesAndTaxes;
        return $this;
    }
    
    /**
     * Rate data specific to FedEx Freight and FedEx National Freight services.
     *
     * @param FreightRateDetail $FreightRateDetail
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setFreightRateDetail(FedEx_ShipService_FreightRateDetail $freightRateDetail)
    {
        $this->FreightRateDetail = $freightRateDetail;
        return $this;
    }
    
    /**
     * All rate discounts that apply to this shipment.
     *
     * @param array[RateDiscount] $FreightDiscounts
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setFreightDiscounts(array $freightDiscounts)
    {
        $this->FreightDiscounts = $freightDiscounts;
        return $this;
    }
    
    /**
     * All rebates that apply to this shipment.
     *
     * @param array[Rebate] $Rebates
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setRebates(array $rebates)
    {
        $this->Rebates = $rebates;
        return $this;
    }
    
    /**
     * All surcharges that apply to this shipment.
     *
     * @param array[Surcharge] $Surcharges
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setSurcharges(array $surcharges)
    {
        $this->Surcharges = $surcharges;
        return $this;
    }
    
    /**
     * All transportation-based taxes applicable to this shipment.
     *
     * @param array[Tax] $Taxes
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setTaxes(array $taxes)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    
    /**
     * All commodity-based duties and taxes applicable to this shipment.
     *
     * @param array[EdtCommodityTax] $DutiesAndTaxes
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setDutiesAndTaxes(array $dutiesAndTaxes)
    {
        $this->DutiesAndTaxes = $dutiesAndTaxes;
        return $this;
    }
    
    /**
     * The "order level" variable handling charges.
     *
     * @param VariableHandlingCharges $VariableHandlingCharges
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setVariableHandlingCharges(FedEx_ShipService_VariableHandlingCharges $variableHandlingCharges)
    {
        $this->VariableHandlingCharges = $variableHandlingCharges;
        return $this;
    }
    
    /**
     * The total of all variable handling charges at both shipment (order) and package level.
     *
     * @param VariableHandlingCharges $TotalVariableHandlingCharges
     * return FedEx_ShipService_ShipmentRateDetail
     */
    public function setTotalVariableHandlingCharges(FedEx_ShipService_VariableHandlingCharges $totalVariableHandlingCharges)
    {
        $this->TotalVariableHandlingCharges = $totalVariableHandlingCharges;
        return $this;
    }
    

    
}