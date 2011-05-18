<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Contains all data required for additional (non-label) shipping documents to be produced in conjunction with a specific shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_ShippingDocumentSpecification
    extends FedEx_AbstractComplexType
{

    /**
     * Indicates the types of shipping documents requested by the shipper.
     *
     * @param array[RequestedShippingDocumentType] $ShippingDocumentTypes
     * return FedEx_RateService_ShippingDocumentSpecification
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
     * return FedEx_RateService_ShippingDocumentSpecification
     */
    public function setCertificateOfOrigin(FedEx_RateService_CertificateOfOriginDetail $certificateOfOrigin)
    {
        $this->CertificateOfOrigin = $certificateOfOrigin;
        return $this;
    }
    
    /**
     * 
     *
     * @param CommercialInvoiceDetail $CommercialInvoiceDetail
     * return FedEx_RateService_ShippingDocumentSpecification
     */
    public function setCommercialInvoiceDetail(FedEx_RateService_CommercialInvoiceDetail $commercialInvoiceDetail)
    {
        $this->CommercialInvoiceDetail = $commercialInvoiceDetail;
        return $this;
    }
    
    /**
     * Specifies the production of each package-level custom document (the same specification is used for all packages).
     *
     * @param CustomDocumentDetail $CustomPackageDocumentDetail
     * return FedEx_RateService_ShippingDocumentSpecification
     */
    public function setCustomPackageDocumentDetail(FedEx_RateService_CustomDocumentDetail $customPackageDocumentDetail)
    {
        $this->CustomPackageDocumentDetail = $customPackageDocumentDetail;
        return $this;
    }
    
    /**
     * Specifies the production of a shipment-level custom document.
     *
     * @param CustomDocumentDetail $CustomShipmentDocumentDetail
     * return FedEx_RateService_ShippingDocumentSpecification
     */
    public function setCustomShipmentDocumentDetail(FedEx_RateService_CustomDocumentDetail $customShipmentDocumentDetail)
    {
        $this->CustomShipmentDocumentDetail = $customShipmentDocumentDetail;
        return $this;
    }
    
    /**
     * Details pertaining to the GAA.
     *
     * @param GeneralAgencyAgreementDetail $GeneralAgencyAgreementDetail
     * return FedEx_RateService_ShippingDocumentSpecification
     */
    public function setGeneralAgencyAgreementDetail(FedEx_RateService_GeneralAgencyAgreementDetail $generalAgencyAgreementDetail)
    {
        $this->GeneralAgencyAgreementDetail = $generalAgencyAgreementDetail;
        return $this;
    }
    
    /**
     * Details pertaining to NAFTA COO.
     *
     * @param NaftaCertificateOfOriginDetail $NaftaCertificateOfOriginDetail
     * return FedEx_RateService_ShippingDocumentSpecification
     */
    public function setNaftaCertificateOfOriginDetail(FedEx_RateService_NaftaCertificateOfOriginDetail $naftaCertificateOfOriginDetail)
    {
        $this->NaftaCertificateOfOriginDetail = $naftaCertificateOfOriginDetail;
        return $this;
    }
    
    /**
     * Specifies the production of the OP-900 document for hazardous materials packages.
     *
     * @param Op900Detail $Op900Detail
     * return FedEx_RateService_ShippingDocumentSpecification
     */
    public function setOp900Detail(FedEx_RateService_Op900Detail $op900Detail)
    {
        $this->Op900Detail = $op900Detail;
        return $this;
    }
    

    
}