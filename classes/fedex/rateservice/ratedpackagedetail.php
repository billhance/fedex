<?php defined('SYSPATH') or die('No direct script access.');

/**
 * If requesting rates using the PackageDetails element (one package at a time) in the request, the rates for each package will be returned in this element. Currently total piece total weight rates are also retuned in this element.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_RatedPackageDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Echoed from the corresponding package in the rate request (if provided).
     *
     * @param array[TrackingId] $TrackingIds
     * return FedEx_RateService_RatedPackageDetail
     */
    public function setTrackingIds(array $trackingIds)
    {
        $this->TrackingIds = $trackingIds;
        return $this;
    }
    
    /**
     * Used with request containing PACKAGE_GROUPS, to identify which group of identical packages was used to produce a reply item.
     *
     * @param nonNegativeInteger $GroupNumber
     * return FedEx_RateService_RatedPackageDetail
     */
    public function setGroupNumber($groupNumber)
    {
        $this->GroupNumber = $groupNumber;
        return $this;
    }
    
    /**
     * The difference between "list" and "account" net charge.
     *
     * @param Money $EffectiveNetDiscount
     * return FedEx_RateService_RatedPackageDetail
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
     * return FedEx_RateService_RatedPackageDetail
     */
    public function setAdjustedCodCollectionAmount(FedEx_RateService_Money $adjustedCodCollectionAmount)
    {
        $this->AdjustedCodCollectionAmount = $adjustedCodCollectionAmount;
        return $this;
    }
    
    /**
     * 
     *
     * @param OversizeClassType $OversizeClass
     * return FedEx_RateService_RatedPackageDetail
     */
    public function setOversizeClass(FedEx_RateService_OversizeClassType $oversizeClass)
    {
        $this->OversizeClass = $oversizeClass;
        return $this;
    }
    
    /**
     * Rate data that are tied to a specific package and rate type combination.
     *
     * @param PackageRateDetail $PackageRateDetail
     * return FedEx_RateService_RatedPackageDetail
     */
    public function setPackageRateDetail(FedEx_RateService_PackageRateDetail $packageRateDetail)
    {
        $this->PackageRateDetail = $packageRateDetail;
        return $this;
    }
    

    
}