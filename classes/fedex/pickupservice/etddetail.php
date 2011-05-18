<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Electronic Trade document references used with the ETD special service.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_EtdDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Specifies client's intent for whether all documents must be confirmed before shipment processing.
     *
     * @param EtdConfirmationType $Confirmation
     * return FedEx_PickupService_EtdDetail
     */
    public function setConfirmation(FedEx_PickupService_EtdConfirmationType $confirmation)
    {
        $this->Confirmation = $confirmation;
        return $this;
    }
    
    /**
     * Indicates the types of shipping documents produced for the shipper by FedEx (see ShippingDocumentSpecification) which should be copied back to the shipper in the shipment result data.
     *
     * @param array[RequestedShippingDocumentType] $RequestedDocumentCopies
     * return FedEx_PickupService_EtdDetail
     */
    public function setRequestedDocumentCopies(array $requestedDocumentCopies)
    {
        $this->RequestedDocumentCopies = $requestedDocumentCopies;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[UploadDocumentDetail] $Documents
     * return FedEx_PickupService_EtdDetail
     */
    public function setDocuments(array $documents)
    {
        $this->Documents = $documents;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[UploadDocumentReferenceDetail] $DocumentReferences
     * return FedEx_PickupService_EtdDetail
     */
    public function setDocumentReferences(array $documentReferences)
    {
        $this->DocumentReferences = $documentReferences;
        return $this;
    }
    

    
}