<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_TrackService_TrackNotificationRecipientDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param boolean $NotifyOnDelivery
     * return FedEx_TrackService_TrackNotificationRecipientDetail
     */
    public function setNotifyOnDelivery($notifyOnDelivery)
    {
        $this->NotifyOnDelivery = $notifyOnDelivery;
        return $this;
    }
    
    /**
     * 
     *
     * @param boolean $NotifyOnException
     * return FedEx_TrackService_TrackNotificationRecipientDetail
     */
    public function setNotifyOnException($notifyOnException)
    {
        $this->NotifyOnException = $notifyOnException;
        return $this;
    }
    

    
}