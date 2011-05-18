<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data regarding the result of the submitted transaction.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_Notification
    extends FedEx_AbstractComplexType
{

    /**
     * The severity of this notification. This can indicate success or failure or some other information about the request. The values that can be returned are SUCCESS - Your transaction succeeded with no other applicable information. NOTE - Additional information that may be of interest to you about your transaction. WARNING - Additional information that you need to know about your transaction that you may need to take action on. ERROR - Information about an error that occurred while processing your transaction. FAILURE - FedEx was unable to process your transaction at this time due to a system failure. Please try again later
     *
     * @param NotificationSeverityType $Severity
     * return FedEx_PickupService_Notification
     */
    public function setSeverity(FedEx_PickupService_NotificationSeverityType $severity)
    {
        $this->Severity = $severity;
        return $this;
    }
    
    /**
     * Indicates the source of this notification. Combined with the Code it uniquely identifies this notification
     *
     * @param string $Source
     * return FedEx_PickupService_Notification
     */
    public function setSource($source)
    {
        $this->Source = $source;
        return $this;
    }
    
    /**
     * A code that represents this notification. Combined with the Source it uniquely identifies this notification.
     *
     * @param string $Code
     * return FedEx_PickupService_Notification
     */
    public function setCode($code)
    {
        $this->Code = $code;
        return $this;
    }
    
    /**
     * Human-readable text that explains this notification.
     *
     * @param string $Message
     * return FedEx_PickupService_Notification
     */
    public function setMessage($message)
    {
        $this->Message = $message;
        return $this;
    }
    
    /**
     * The translated message. The language and locale specified in the ClientDetail. Localization are used to determine the representation. Currently only supported in a TrackReply.
     *
     * @param string $LocalizedMessage
     * return FedEx_PickupService_Notification
     */
    public function setLocalizedMessage($localizedMessage)
    {
        $this->LocalizedMessage = $localizedMessage;
        return $this;
    }
    
    /**
     * A collection of name/value pairs that provide specific data to help the client determine the nature of an error (or warning, etc.) witout having to parse the message string.
     *
     * @param array[NotificationParameter] $MessageParameters
     * return FedEx_PickupService_Notification
     */
    public function setMessageParameters(array $messageParameters)
    {
        $this->MessageParameters = $messageParameters;
        return $this;
    }
    

    
}