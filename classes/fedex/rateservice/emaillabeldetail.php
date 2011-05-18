<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specific information about the delivery of the email and options for the shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_EMailLabelDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Email address to send the URL to.
     *
     * @param string $NotificationEMailAddress
     * return FedEx_RateService_EMailLabelDetail
     */
    public function setNotificationEMailAddress($notificationEMailAddress)
    {
        $this->NotificationEMailAddress = $notificationEMailAddress;
        return $this;
    }
    
    /**
     * A message to be inserted into the email.
     *
     * @param string $NotificationMessage
     * return FedEx_RateService_EMailLabelDetail
     */
    public function setNotificationMessage($notificationMessage)
    {
        $this->NotificationMessage = $notificationMessage;
        return $this;
    }
    

    
}