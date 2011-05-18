<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data for a FedEx email notification recipient.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_EMailNotificationRecipient
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the relationship this email recipient has to the shipment.
     *
     * @param EMailNotificationRecipientType $EMailNotificationRecipientType
     * return FedEx_PickupService_EMailNotificationRecipient
     */
    public function setEMailNotificationRecipientType(FedEx_PickupService_EMailNotificationRecipientType $eMailNotificationRecipientType)
    {
        $this->EMailNotificationRecipientType = $eMailNotificationRecipientType;
        return $this;
    }
    
    /**
     * The email address to send the notification to
     *
     * @param string $EMailAddress
     * return FedEx_PickupService_EMailNotificationRecipient
     */
    public function setEMailAddress($eMailAddress)
    {
        $this->EMailAddress = $eMailAddress;
        return $this;
    }
    
    /**
     * Notify the email recipient when this shipment has been shipped.
     *
     * @param boolean $NotifyOnShipment
     * return FedEx_PickupService_EMailNotificationRecipient
     */
    public function setNotifyOnShipment($notifyOnShipment)
    {
        $this->NotifyOnShipment = $notifyOnShipment;
        return $this;
    }
    
    /**
     * Notify the email recipient if this shipment encounters a problem while in route
     *
     * @param boolean $NotifyOnException
     * return FedEx_PickupService_EMailNotificationRecipient
     */
    public function setNotifyOnException($notifyOnException)
    {
        $this->NotifyOnException = $notifyOnException;
        return $this;
    }
    
    /**
     * Notify the email recipient when this shipment has been delivered.
     *
     * @param boolean $NotifyOnDelivery
     * return FedEx_PickupService_EMailNotificationRecipient
     */
    public function setNotifyOnDelivery($notifyOnDelivery)
    {
        $this->NotifyOnDelivery = $notifyOnDelivery;
        return $this;
    }
    
    /**
     * The format of the email notification.
     *
     * @param EMailNotificationFormatType $Format
     * return FedEx_PickupService_EMailNotificationRecipient
     */
    public function setFormat(FedEx_PickupService_EMailNotificationFormatType $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * The language/locale to be used in this email notification.
     *
     * @param Localization $Localization
     * return FedEx_PickupService_EMailNotificationRecipient
     */
    public function setLocalization(FedEx_PickupService_Localization $localization)
    {
        $this->Localization = $localization;
        return $this;
    }
    

    
}