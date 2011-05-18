<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Contains all data required for additional (non-label) shipping documents to be produced in conjunction with a specific shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_ShippingDocumentSpecification
    extends FedEx_AbstractComplexType
{

    /**
     * Indicates the types of shipping documents requested by the shipper.
     *
     * @param array[RequestedShippingDocumentType] $ShippingDocumentTypes
     * return FedEx_ShipService_ShippingDocumentSpecification
     */
    public function setShippingDocumentTypes(array $shippingDocumentTypes)
    {
        $this->ShippingDocumentTypes = $shippingDocumentTypes;
        return $this;
    }
    
    /**
     * 
     *
     * @param CertificateOfOriginDetail $CertificateOfOrigin
     * return FedEx_ShipService_ShippingDocumentSpecification
     */
    public function setCertificateOfOrigin(FedEx_ShipService_CertificateOfOriginDetail $certificateOfOrigin)
    {
        $this->CertificateOfOrigin = $certificateOfOrigin;
        return $this;
    }
    
    /**
     * 
     *
     * @param CommercialInvoiceDetail $CommercialInvoiceDetail
     * return FedEx_ShipService_ShippingDocumentSpecification
     */
    public function setCommercialInvoiceDetail(FedEx_ShipService_CommercialInvoiceDetail $commercialInvoiceDetail)
    {
        $this->CommercialInvoiceDetail = $commercialInvoiceDetail;
        return $this;
    }
    
    /**
     * Specifies the production of each package-level custom document (the same specification is used for all packages).
     *
     * @param array[CustomDocumentDetail] $CustomPackageDocumentDetail
     * return FedEx_ShipService_ShippingDocumentSpecification
     */
    public function setCustomPackageDocumentDetail(array $customPackageDocumentDetail)
    {
        $this->CustomPackageDocumentDetail = $customPackageDocumentDetail;
        return $this;
    }
    
    /**
     * Specifies the production of a shipment-level custom document.
     *
     * @param array[CustomDocumentDetail] $CustomShipmentDocumentDetail
     * return FedEx_ShipService_ShippingDocumentSpecification
     */
    public function setCustomShipmentDocumentDetail(array $customShipmentDocumentDetail)
    {
        $this->CustomShipmentDocumentDetail = $customShipmentDocumentDetail;
        return $this;
    }
    
    /**
     * This element is currently not supported and is for the future use. (Details pertaining to the GAA.)
     *
     * @param GeneralAgencyAgreementDetail $GeneralAgencyAgreementDetail
     * return FedEx_ShipService_ShippingDocumentSpecification
     */
    public function setGeneralAgencyAgreementDetail(FedEx_ShipService_GeneralAgencyAgreementDetail $generalAgencyAgreementDetail)
    {
        $this->GeneralAgencyAgreementDetail = $generalAgencyAgreementDetail;
        return $this;
    }
    
    /**
     * 
     *
     * @param NaftaCertificateOfOriginDetail $NaftaCertificateOfOriginDetail
     * return FedEx_ShipService_ShippingDocumentSpecification
     */
    public function setNaftaCertificateOfOriginDetail(FedEx_ShipService_NaftaCertificateOfOriginDetail $naftaCertificateOfOriginDetail)
    {
        $this->NaftaCertificateOfOriginDetail = $naftaCertificateOfOriginDetail;
        return $this;
    }
    
    /**
     * Specifies the production of the OP-900 document for hazardous materials packages.
     *
     * @param Op900Detail $Op900Detail
     * return FedEx_ShipService_ShippingDocumentSpecification
     */
    public function setOp900Detail(FedEx_ShipService_Op900Detail $op900Detail)
    {
        $this->Op900Detail = $op900Detail;
        return $this;
    }
    
    /**
     * Specifies the production of the OP-900 document for hazardous materials.
     *
     * @param FreightAddressLabelDetail $FreightAddressLabelDetail
     * return FedEx_ShipService_ShippingDocumentSpecification
     */
    public function setFreightAddressLabelDetail(FedEx_ShipService_FreightAddressLabelDetail $freightAddressLabelDetail)
    {
        $this->FreightAddressLabelDetail = $freightAddressLabelDetail;
        return $this;
    }
    

    
}