<?php defined('SYSPATH') or die('No direct script access.');

/**
 * This class rationalizes RequestedPackage and RequestedPackageSummary from previous interfaces. The way in which it is uses within a RequestedShipment depends on the RequestedPackageDetailType value specified for that shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_RequestedPackageLineItem
    extends FedEx_AbstractComplexType
{

    /**
     * Used only with INDIVIDUAL_PACKAGE, as a unique identifier of each requested package.
     *
     * @param positiveInteger $SequenceNumber
     * return FedEx_RateService_RequestedPackageLineItem
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    
    /**
     * Used only with PACKAGE_GROUPS, as a unique identifier of each group of identical packages.
     *
     * @param nonNegativeInteger $GroupNumber
     * return FedEx_RateService_RequestedPackageLineItem
     */
    public function setGroupNumber($groupNumber)
    {
        $this->GroupNumber = $groupNumber;
        return $this;
    }
    
    /**
     * Used only with PACKAGE_GROUPS, as a count of packages within a group of identical packages.
     *
     * @param nonNegativeInteger $GroupPackageCount
     * return FedEx_RateService_RequestedPackageLineItem
     */
    public function setGroupPackageCount($groupPackageCount)
    {
        $this->GroupPackageCount = $groupPackageCount;
        return $this;
    }
    
    /**
     * 
     *
     * @param VariableHandlingChargeDetail $VariableHandlingChargeDetail
     * return FedEx_RateService_RequestedPackageLineItem
     */
    public function setVariableHandlingChargeDetail(FedEx_RateService_VariableHandlingChargeDetail $variableHandlingChargeDetail)
    {
        $this->VariableHandlingChargeDetail = $variableHandlingChargeDetail;
        return $this;
    }
    
    /**
     * Only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS. Ignored for PACKAGE_SUMMARY, in which case totalInsuredValue and packageCount on the shipment will be used to determine this value.
     *
     * @param Money $InsuredValue
     * return FedEx_RateService_RequestedPackageLineItem
     */
    public function setInsuredValue(FedEx_RateService_Money $insuredValue)
    {
        $this->InsuredValue = $insuredValue;
        return $this;
    }
    
    /**
     * Only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS. Ignored for PACKAGE_SUMMARY, in which case totalweight and packageCount on the shipment will be used to determine this value.
     *
     * @param Weight $Weight
     * return FedEx_RateService_RequestedPackageLineItem
     */
    public function setWeight(FedEx_RateService_Weight $weight)
    {
        $this->Weight = $weight;
        return $this;
    }
    
    /**
     * 
     *
     * @param Dimensions $Dimensions
     * return FedEx_RateService_RequestedPackageLineItem
     */
    public function setDimensions(FedEx_RateService_Dimensions $dimensions)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    
    /**
     * Provides additional detail on how the customer has physically packaged this item. As of June 2009, required for packages moving under international and SmartPost services.
     *
     * @param PhysicalPackagingType $PhysicalPackaging
     * return FedEx_RateService_RequestedPackageLineItem
     */
    public function setPhysicalPackaging(FedEx_RateService_PhysicalPackagingType $physicalPackaging)
    {
        $this->PhysicalPackaging = $physicalPackaging;
        return $this;
    }
    
    /**
     * Human-readable text describing the package.
     *
     * @param string $ItemDescription
     * return FedEx_RateService_RequestedPackageLineItem
     */
    public function setItemDescription($itemDescription)
    {
        $this->ItemDescription = $itemDescription;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[CustomerReference] $CustomerReferences
     * return FedEx_RateService_RequestedPackageLineItem
     */
    public function setCustomerReferences(array $customerReferences)
    {
        $this->CustomerReferences = $customerReferences;
        return $this;
    }
    
    /**
     * 
     *
     * @param PackageSpecialServicesRequested $SpecialServicesRequested
     * return FedEx_RateService_RequestedPackageLineItem
     */
    public function setSpecialServicesRequested(FedEx_RateService_PackageSpecialServicesRequested $specialServicesRequested)
    {
        $this->SpecialServicesRequested = $specialServicesRequested;
        return $this;
    }
    
    /**
     * Only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS.
     *
     * @param array[ContentRecord] $ContentRecords
     * return FedEx_RateService_RequestedPackageLineItem
     */
    public function setContentRecords(array $contentRecords)
    {
        $this->ContentRecords = $contentRecords;
        return $this;
    }
    

    
}