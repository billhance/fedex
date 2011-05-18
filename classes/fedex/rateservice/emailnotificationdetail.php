<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Information describing email notifications that will be sent in relation to events that occur during package movement
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_EMailNotificationDetail
    extends FedEx_AbstractComplexType
{

    /**
     * A message that will be included in the email notifications
     *
     * @param string $PersonalMessage
     * return FedEx_RateService_EMailNotificationDetail
     */
    public function setPersonalMessage($personalMessage)
    {
        $this->PersonalMessage = $personalMessage;
        return $this;
    }
    
    /**
     * Information describing the destination of the email, format of the email and events to be notified on
     *
     * @param array[EMailNotificationRecipient] $Recipients
     * return FedEx_RateService_EMailNotificationDetail
     */
    public function setRecipients(array $recipients)
    {
        $this->Recipients = $recipients;
        return $this;
    }
    

    
}