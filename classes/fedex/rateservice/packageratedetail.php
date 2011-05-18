<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Data for a package's rates, as calculated per a specific rate type.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_PackageRateDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Type used for this specific set of rate data.
     *
     * @param ReturnedRateType $RateType
     * return FedEx_RateService_PackageRateDetail
     */
    public function setRateType(FedEx_RateService_ReturnedRateType $rateType)
    {
        $this->RateType = $rateType;
        return $this;
    }
    
    /**
     * Indicates which weight was used.
     *
     * @param RatedWeightMethod $RatedWeightMethod
     * return FedEx_RateService_PackageRateDetail
     */
    public function setRatedWeightMethod(FedEx_RateService_RatedWeightMethod $ratedWeightMethod)
    {
        $this->RatedWeightMethod = $ratedWeightMethod;
        return $this;
    }
    
    /**
     * Internal FedEx use only.
     *
     * @param MinimumChargeType $MinimumChargeType
     * return FedEx_RateService_PackageRateDetail
     */
    public function setMinimumChargeType(FedEx_RateService_MinimumChargeType $minimumChargeType)
    {
        $this->MinimumChargeType = $minimumChargeType;
        return $this;
    }
    
    /**
     * The weight that was used to calculate the rate.
     *
     * @param Weight $BillingWeight
     * return FedEx_RateService_PackageRateDetail
     */
    public function setBillingWeight(FedEx_RateService_Weight $billingWeight)
    {
        $this->BillingWeight = $billingWeight;
        return $this;
    }
    
    /**
     * The dimensional weight of this package (if greater than actual).
     *
     * @param Weight $DimWeight
     * return FedEx_RateService_PackageRateDetail
     */
    public function setDimWeight(FedEx_RateService_Weight $dimWeight)
    {
        $this->DimWeight = $dimWeight;
        return $this;
    }
    
    /**
     * The oversize weight of this package (if the package is oversize).
     *
     * @param Weight $OversizeWeight
     * return FedEx_RateService_PackageRateDetail
     */
    public function setOversizeWeight(FedEx_RateService_Weight $oversizeWeight)
    {
        $this->OversizeWeight = $oversizeWeight;
        return $this;
    }
    
    /**
     * The transportation charge only (prior to any discounts applied) for this package.
     *
     * @param Money $BaseCharge
     * return FedEx_RateService_PackageRateDetail
     */
    public function setBaseCharge(FedEx_RateService_Money $baseCharge)
    {
        $this->BaseCharge = $baseCharge;
        return $this;
    }
    
    /**
     * The sum of all discounts on this package.
     *
     * @param Money $TotalFreightDiscounts
     * return FedEx_RateService_PackageRateDetail
     */
    public function setTotalFreightDiscounts(FedEx_RateService_Money $totalFreightDiscounts)
    {
        $this->TotalFreightDiscounts = $totalFreightDiscounts;
        return $this;
    }
    
    /**
     * This package's baseCharge - totalFreightDiscounts.
     *
     * @param Money $NetFreight
     * return FedEx_RateService_PackageRateDetail
     */
    public function setNetFreight(FedEx_RateService_Money $netFreight)
    {
        $this->NetFreight = $netFreight;
        return $this;
    }
    
    /**
     * The sum of all surcharges on this package.
     *
     * @param Money $TotalSurcharges
     * return FedEx_RateService_PackageRateDetail
     */
    public function setTotalSurcharges(FedEx_RateService_Money $totalSurcharges)
    {
        $this->TotalSurcharges = $totalSurcharges;
        return $this;
    }
    
    /**
     * This package's netFreight + totalSurcharges (not including totalTaxes).
     *
     * @param Money $NetFedExCharge
     * return FedEx_RateService_PackageRateDetail
     */
    public function setNetFedExCharge(FedEx_RateService_Money $netFedExCharge)
    {
        $this->NetFedExCharge = $netFedExCharge;
        return $this;
    }
    
    /**
     * The sum of all taxes on this package.
     *
     * @param Money $TotalTaxes
     * return FedEx_RateService_PackageRateDetail
     */
    public function setTotalTaxes(FedEx_RateService_Money $totalTaxes)
    {
        $this->TotalTaxes = $totalTaxes;
        return $this;
    }
    
    /**
     * This package's netFreight + totalSurcharges + totalTaxes.
     *
     * @param Money $NetCharge
     * return FedEx_RateService_PackageRateDetail
     */
    public function setNetCharge(FedEx_RateService_Money $netCharge)
    {
        $this->NetCharge = $netCharge;
        return $this;
    }
    
    /**
     * The total sum of all rebates applied to this package.
     *
     * @param Money $TotalRebates
     * return FedEx_RateService_PackageRateDetail
     */
    public function setTotalRebates(FedEx_RateService_Money $totalRebates)
    {
        $this->TotalRebates = $totalRebates;
        return $this;
    }
    
    /**
     * All rate discounts that apply to this package.
     *
     * @param array[RateDiscount] $FreightDiscounts
     * return FedEx_RateService_PackageRateDetail
     */
    public function setFreightDiscounts(array $freightDiscounts)
    {
        $this->FreightDiscounts = $freightDiscounts;
        return $this;
    }
    
    /**
     * All rebates that apply to this package.
     *
     * @param array[Rebate] $Rebates
     * return FedEx_RateService_PackageRateDetail
     */
    public function setRebates(array $rebates)
    {
        $this->Rebates = $rebates;
        return $this;
    }
    
    /**
     * All surcharges that apply to this package (either because of characteristics of the package itself, or because it is carrying per-shipment surcharges for the shipment of which it is a part).
     *
     * @param array[Surcharge] $Surcharges
     * return FedEx_RateService_PackageRateDetail
     */
    public function setSurcharges(array $surcharges)
    {
        $this->Surcharges = $surcharges;
        return $this;
    }
    
    /**
     * All taxes applicable (or distributed to) this package.
     *
     * @param array[Tax] $Taxes
     * return FedEx_RateService_PackageRateDetail
     */
    public function setTaxes(array $taxes)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    
    /**
     * The variable handling charges calculated based on the type variable handling charges requested.
     *
     * @param VariableHandlingCharges $VariableHandlingCharges
     * return FedEx_RateService_PackageRateDetail
     */
    public function setVariableHandlingCharges(FedEx_RateService_VariableHandlingCharges $variableHandlingCharges)
    {
        $this->VariableHandlingCharges = $variableHandlingCharges;
        return $this;
    }
    

    
}