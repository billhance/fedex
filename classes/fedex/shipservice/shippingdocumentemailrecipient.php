<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifies an individual recipient of e-mailed shipping document(s).
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_ShippingDocumentEMailRecipient
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the relationship of this recipient in the shipment.
     *
     * @param EMailNotificationRecipientType $RecipientType
     * return FedEx_ShipService_ShippingDocumentEMailRecipient
     */
    public function setRecipientType(FedEx_ShipService_EMailNotificationRecipientType $recipientType)
    {
        $this->RecipientType = $recipientType;
        return $this;
    }
    
    /**
     * Address to which the document is to be sent.
     *
     * @param string $Address
     * return FedEx_ShipService_ShippingDocumentEMailRecipient
     */
    public function setAddress($address)
    {
        $this->Address = $address;
        return $this;
    }
    

    
}