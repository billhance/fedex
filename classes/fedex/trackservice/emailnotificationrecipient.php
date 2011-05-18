<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_TrackService_EMailNotificationRecipient
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param EMailNotificationRecipientType $EMailNotificationRecipientType
     * return FedEx_TrackService_EMailNotificationRecipient
     */
    public function setEMailNotificationRecipientType(FedEx_TrackService_EMailNotificationRecipientType $eMailNotificationRecipientType)
    {
        $this->EMailNotificationRecipientType = $eMailNotificationRecipientType;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $EMailAddress
     * return FedEx_TrackService_EMailNotificationRecipient
     */
    public function setEMailAddress($eMailAddress)
    {
        $this->EMailAddress = $eMailAddress;
        return $this;
    }
    
    /**
     * 
     *
     * @param boolean $NotifyOnShipment
     * return FedEx_TrackService_EMailNotificationRecipient
     */
    public function setNotifyOnShipment($notifyOnShipment)
    {
        $this->NotifyOnShipment = $notifyOnShipment;
        return $this;
    }
    
    /**
     * 
     *
     * @param boolean $NotifyOnException
     * return FedEx_TrackService_EMailNotificationRecipient
     */
    public function setNotifyOnException($notifyOnException)
    {
        $this->NotifyOnException = $notifyOnException;
        return $this;
    }
    
    /**
     * 
     *
     * @param boolean $NotifyOnDelivery
     * return FedEx_TrackService_EMailNotificationRecipient
     */
    public function setNotifyOnDelivery($notifyOnDelivery)
    {
        $this->NotifyOnDelivery = $notifyOnDelivery;
        return $this;
    }
    
    /**
     * 
     *
     * @param EMailNotificationFormatType $Format
     * return FedEx_TrackService_EMailNotificationRecipient
     */
    public function setFormat(FedEx_TrackService_EMailNotificationFormatType $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * 
     *
     * @param Localization $Localization
     * return FedEx_TrackService_EMailNotificationRecipient
     */
    public function setLocalization(FedEx_TrackService_Localization $localization)
    {
        $this->Localization = $localization;
        return $this;
    }
    

    
}