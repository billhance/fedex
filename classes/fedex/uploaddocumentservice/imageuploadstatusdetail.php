<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_UploadDocumentService_ImageUploadStatusDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param ImageId $Id
     * return FedEx_UploadDocumentService_ImageUploadStatusDetail
     */
    public function setId(FedEx_UploadDocumentService_ImageId $id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * 
     *
     * @param UploadImageStatusType $Status
     * return FedEx_UploadDocumentService_ImageUploadStatusDetail
     */
    public function setStatus(FedEx_UploadDocumentService_UploadImageStatusType $status)
    {
        $this->Status = $status;
        return $this;
    }
    
    /**
     * 
     *
     * @param UploadImageStatusInfoType $StatusInfo
     * return FedEx_UploadDocumentService_ImageUploadStatusDetail
     */
    public function setStatusInfo(FedEx_UploadDocumentService_UploadImageStatusInfoType $statusInfo)
    {
        $this->StatusInfo = $statusInfo;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Message
     * return FedEx_UploadDocumentService_ImageUploadStatusDetail
     */
    public function setMessage($message)
    {
        $this->Message = $message;
        return $this;
    }
    

    
}