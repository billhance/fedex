<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_UploadDocumentService_UploadImageDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param ImageId $Id
     * return FedEx_UploadDocumentService_UploadImageDetail
     */
    public function setId(FedEx_UploadDocumentService_ImageId $id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * 
     *
     * @param base64Binary $Image
     * return FedEx_UploadDocumentService_UploadImageDetail
     */
    public function setImage($image)
    {
        $this->Image = $image;
        return $this;
    }
    

    
}