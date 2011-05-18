<?php defined('SYSPATH') or die('No direct script access.');

/**
 * A single part of a shipping document, such as one page of a multiple-page document whose format requires a separate image per page.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_CloseService_ShippingDocumentPart
    extends FedEx_AbstractComplexType
{

    /**
     * The one-origin position of this part within a document.
     *
     * @param positiveInteger $DocumentPartSequenceNumber
     * return FedEx_CloseService_ShippingDocumentPart
     */
    public function setDocumentPartSequenceNumber($documentPartSequenceNumber)
    {
        $this->DocumentPartSequenceNumber = $documentPartSequenceNumber;
        return $this;
    }
    
    /**
     * Graphic or printer commands for this image within a document.
     *
     * @param base64Binary $Image
     * return FedEx_CloseService_ShippingDocumentPart
     */
    public function setImage($image)
    {
        $this->Image = $image;
        return $this;
    }
    

    
}