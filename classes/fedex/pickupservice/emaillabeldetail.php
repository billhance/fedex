<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Describes specific information about the email label shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_EMailLabelDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Notification email will be sent to this email address
     *
     * @param string $NotificationEMailAddress
     * return FedEx_PickupService_EMailLabelDetail
     */
    public function setNotificationEMailAddress($notificationEMailAddress)
    {
        $this->NotificationEMailAddress = $notificationEMailAddress;
        return $this;
    }
    
    /**
     * Message to be sent in the notification email
     *
     * @param string $NotificationMessage
     * return FedEx_PickupService_EMailLabelDetail
     */
    public function setNotificationMessage($notificationMessage)
    {
        $this->NotificationMessage = $notificationMessage;
        return $this;
    }
    

    
}