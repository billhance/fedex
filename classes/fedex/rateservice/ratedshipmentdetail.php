<?php defined('SYSPATH') or die('No direct script access.');

/**
 * This class groups the shipment and package rating data for a specific rate type for use in a rating reply, which groups result data by rate type.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_RatedShipmentDetail
    extends FedEx_AbstractComplexType
{

    /**
     * The difference between "list" and "account" total net charge.
     *
     * @param Money $EffectiveNetDiscount
     * return FedEx_RateService_RatedShipmentDetail
     */
    public function setEffectiveNetDiscount(FedEx_RateService_Money $effectiveNetDiscount)
    {
        $this->EffectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    
    /**
     * Ground COD is package level.
     *
     * @param Money $AdjustedCodCollectionAmount
     * return FedEx_RateService_RatedShipmentDetail
     */
    public function setAdjustedCodCollectionAmount(FedEx_RateService_Money $adjustedCodCollectionAmount)
    {
        $this->AdjustedCodCollectionAmount = $adjustedCodCollectionAmount;
        return $this;
    }
    
    /**
     * The shipment-level totals for this rate type.
     *
     * @param ShipmentRateDetail $ShipmentRateDetail
     * return FedEx_RateService_RatedShipmentDetail
     */
    public function setShipmentRateDetail(FedEx_RateService_ShipmentRateDetail $shipmentRateDetail)
    {
        $this->ShipmentRateDetail = $shipmentRateDetail;
        return $this;
    }
    
    /**
     * The package-level data for this rate type.
     *
     * @param array[RatedPackageDetail] $RatedPackages
     * return FedEx_RateService_RatedShipmentDetail
     */
    public function setRatedPackages(array $ratedPackages)
    {
        $this->RatedPackages = $ratedPackages;
        return $this;
    }
    

    
}