<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_CompletedPackageDetail
    extends FedEx_AbstractComplexType
{

    /**
     * The package sequence number of this package in a multiple piece shipment.
     *
     * @param positiveInteger $SequenceNumber
     * return FedEx_ShipService_CompletedPackageDetail
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    
    /**
     * The Tracking number and form id for this package.
     *
     * @param array[TrackingId] $TrackingIds
     * return FedEx_ShipService_CompletedPackageDetail
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
     * return FedEx_ShipService_CompletedPackageDetail
     */
    public function setGroupNumber($groupNumber)
    {
        $this->GroupNumber = $groupNumber;
        return $this;
    }
    
    /**
     * Oversize class for this package.
     *
     * @param OversizeClassType $OversizeClass
     * return FedEx_ShipService_CompletedPackageDetail
     */
    public function setOversizeClass(FedEx_ShipService_OversizeClassType $oversizeClass)
    {
        $this->OversizeClass = $oversizeClass;
        return $this;
    }
    
    /**
     * All package-level rating data for this package, which may include data for multiple rate types.
     *
     * @param PackageRating $PackageRating
     * return FedEx_ShipService_CompletedPackageDetail
     */
    public function setPackageRating(FedEx_ShipService_PackageRating $packageRating)
    {
        $this->PackageRating = $packageRating;
        return $this;
    }
    
    /**
     * Associated with package, due to interaction with per-package hazardous materials presence/absence.
     *
     * @param string $GroundServiceCode
     * return FedEx_ShipService_CompletedPackageDetail
     */
    public function setGroundServiceCode($groundServiceCode)
    {
        $this->GroundServiceCode = $groundServiceCode;
        return $this;
    }
    
    /**
     * The data that is used to from the Astra and 2DCommon barcodes for the label..
     *
     * @param PackageBarcodes $Barcodes
     * return FedEx_ShipService_CompletedPackageDetail
     */
    public function setBarcodes(FedEx_ShipService_PackageBarcodes $barcodes)
    {
        $this->Barcodes = $barcodes;
        return $this;
    }
    
    /**
     * The textual description of the special service applied to the package.
     *
     * @param string $AstraHandlingText
     * return FedEx_ShipService_CompletedPackageDetail
     */
    public function setAstraHandlingText($astraHandlingText)
    {
        $this->AstraHandlingText = $astraHandlingText;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[AstraLabelElement] $AstraLabelElements
     * return FedEx_ShipService_CompletedPackageDetail
     */
    public function setAstraLabelElements(array $astraLabelElements)
    {
        $this->AstraLabelElements = $astraLabelElements;
        return $this;
    }
    
    /**
     * The label image or printer commands to print the label.
     *
     * @param ShippingDocument $Label
     * return FedEx_ShipService_CompletedPackageDetail
     */
    public function setLabel(FedEx_ShipService_ShippingDocument $label)
    {
        $this->Label = $label;
        return $this;
    }
    
    /**
     * All package-level shipping documents (other than labels and barcodes). For use in loads after January, 2008.
     *
     * @param array[ShippingDocument] $PackageDocuments
     * return FedEx_ShipService_CompletedPackageDetail
     */
    public function setPackageDocuments(array $packageDocuments)
    {
        $this->PackageDocuments = $packageDocuments;
        return $this;
    }
    
    /**
     * Information about the COD return shipment.
     *
     * @param CodReturnPackageDetail $CodReturnDetail
     * return FedEx_ShipService_CompletedPackageDetail
     */
    public function setCodReturnDetail(FedEx_ShipService_CodReturnPackageDetail $codReturnDetail)
    {
        $this->CodReturnDetail = $codReturnDetail;
        return $this;
    }
    
    /**
     * Actual signature option applied, to allow for cases in which the original value conflicted with other service features in the shipment.
     *
     * @param SignatureOptionType $SignatureOption
     * return FedEx_ShipService_CompletedPackageDetail
     */
    public function setSignatureOption(FedEx_ShipService_SignatureOptionType $signatureOption)
    {
        $this->SignatureOption = $signatureOption;
        return $this;
    }
    
    /**
     * Documents the kinds and quantities of all hazardous commodities in the current package, using updated hazardous commodity description data.
     *
     * @param array[ValidatedHazardousCommodityContent] $HazardousCommodities
     * return FedEx_ShipService_CompletedPackageDetail
     */
    public function setHazardousCommodities(array $hazardousCommodities)
    {
        $this->HazardousCommodities = $hazardousCommodities;
        return $this;
    }
    

    
}