<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifies how to e-mail shipping documents.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_CloseService_ShippingDocumentEMailDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Provides the roles and email addresses for e-mail recipients.
     *
     * @param array[ShippingDocumentEMailRecipient] $EMailRecipients
     * return FedEx_CloseService_ShippingDocumentEMailDetail
     */
    public function setEMailRecipients(array $eMailRecipients)
    {
        $this->EMailRecipients = $eMailRecipients;
        return $this;
    }
    
    /**
     * Identifies the convention by which documents are to be grouped as e-mail attachments.
     *
     * @param ShippingDocumentEMailGroupingType $Grouping
     * return FedEx_CloseService_ShippingDocumentEMailDetail
     */
    public function setGrouping(FedEx_CloseService_ShippingDocumentEMailGroupingType $grouping)
    {
        $this->Grouping = $grouping;
        return $this;
    }
    

    
}