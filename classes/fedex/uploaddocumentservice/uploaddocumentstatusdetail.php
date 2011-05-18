<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_UploadDocumentService_UploadDocumentStatusDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param nonNegativeInteger $LineNumber
     * return FedEx_UploadDocumentService_UploadDocumentStatusDetail
     */
    public function setLineNumber($lineNumber)
    {
        $this->LineNumber = $lineNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $CustomerReference
     * return FedEx_UploadDocumentService_UploadDocumentStatusDetail
     */
    public function setCustomerReference($customerReference)
    {
        $this->CustomerReference = $customerReference;
        return $this;
    }
    
    /**
     * 
     *
     * @param UploadDocumentProducerType $DocumentProducer
     * return FedEx_UploadDocumentService_UploadDocumentStatusDetail
     */
    public function setDocumentProducer(FedEx_UploadDocumentService_UploadDocumentProducerType $documentProducer)
    {
        $this->DocumentProducer = $documentProducer;
        return $this;
    }
    
    /**
     * 
     *
     * @param UploadDocumentType $DocumentType
     * return FedEx_UploadDocumentService_UploadDocumentStatusDetail
     */
    public function setDocumentType(FedEx_UploadDocumentService_UploadDocumentType $documentType)
    {
        $this->DocumentType = $documentType;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $FileName
     * return FedEx_UploadDocumentService_UploadDocumentStatusDetail
     */
    public function setFileName($fileName)
    {
        $this->FileName = $fileName;
        return $this;
    }
    
    /**
     * 
     *
     * @param UploadDocumentStatusType $Status
     * return FedEx_UploadDocumentService_UploadDocumentStatusDetail
     */
    public function setStatus(FedEx_UploadDocumentService_UploadDocumentStatusType $status)
    {
        $this->Status = $status;
        return $this;
    }
    
    /**
     * Distinct value for reason status was assigned.
     *
     * @param UploadDocumentStatusInfoType $StatusInfo
     * return FedEx_UploadDocumentService_UploadDocumentStatusDetail
     */
    public function setStatusInfo(FedEx_UploadDocumentService_UploadDocumentStatusInfoType $statusInfo)
    {
        $this->StatusInfo = $statusInfo;
        return $this;
    }
    
    /**
     * Human-readable explanation of document status.
     *
     * @param string $Message
     * return FedEx_UploadDocumentService_UploadDocumentStatusDetail
     */
    public function setMessage($message)
    {
        $this->Message = $message;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $DocumentId
     * return FedEx_UploadDocumentService_UploadDocumentStatusDetail
     */
    public function setDocumentId($documentId)
    {
        $this->DocumentId = $documentId;
        return $this;
    }
    
    /**
     * 
     *
     * @param UploadDocumentIdProducer $DocumentIdProducer
     * return FedEx_UploadDocumentService_UploadDocumentStatusDetail
     */
    public function setDocumentIdProducer(FedEx_UploadDocumentService_UploadDocumentIdProducer $documentIdProducer)
    {
        $this->DocumentIdProducer = $documentIdProducer;
        return $this;
    }
    

    
}