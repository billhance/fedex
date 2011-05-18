<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_CompletedEtdDetail
    extends FedEx_AbstractComplexType
{

    /**
     * The identifier for all clearance documents associated with this shipment.
     *
     * @param string $FolderId
     * return FedEx_ShipService_CompletedEtdDetail
     */
    public function setFolderId($folderId)
    {
        $this->FolderId = $folderId;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[UploadDocumentReferenceDetail] $UploadDocumentReferenceDetails
     * return FedEx_ShipService_CompletedEtdDetail
     */
    public function setUploadDocumentReferenceDetails(array $uploadDocumentReferenceDetails)
    {
        $this->UploadDocumentReferenceDetails = $uploadDocumentReferenceDetails;
        return $this;
    }
    

    
}