<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_TrackService_EMailNotificationDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Personal messages are not applicable with wireless formatted notifications. UTF-8 encoded message.
     *
     * @param string $PersonalMessage
     * return FedEx_TrackService_EMailNotificationDetail
     */
    public function setPersonalMessage($personalMessage)
    {
        $this->PersonalMessage = $personalMessage;
        return $this;
    }
    
    /**
     * Currently up to a maximum of 6 email combinations are supported.
     *
     * @param array[EMailNotificationRecipient] $Recipients
     * return FedEx_TrackService_EMailNotificationDetail
     */
    public function setRecipients(array $recipients)
    {
        $this->Recipients = $recipients;
        return $this;
    }
    

    
}