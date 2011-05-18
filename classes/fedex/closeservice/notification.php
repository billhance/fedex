<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_CloseService_Notification
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param NotificationSeverityType $Severity
     * return FedEx_CloseService_Notification
     */
    public function setSeverity(FedEx_CloseService_NotificationSeverityType $severity)
    {
        $this->Severity = $severity;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Source
     * return FedEx_CloseService_Notification
     */
    public function setSource($source)
    {
        $this->Source = $source;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Code
     * return FedEx_CloseService_Notification
     */
    public function setCode($code)
    {
        $this->Code = $code;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Message
     * return FedEx_CloseService_Notification
     */
    public function setMessage($message)
    {
        $this->Message = $message;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $LocalizedMessage
     * return FedEx_CloseService_Notification
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
     * return FedEx_CloseService_Notification
     */
    public function setMessageParameters(array $messageParameters)
    {
        $this->MessageParameters = $messageParameters;
        return $this;
    }
    

    
}