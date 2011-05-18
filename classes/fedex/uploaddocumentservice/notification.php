<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data regarding the results of the submitted transaction.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_UploadDocumentService_Notification
    extends FedEx_AbstractComplexType
{

    /**
     * The severity of this notification. This can indicate success or failure or some other information about the request such as errors or notes.
     *
     * @param NotificationSeverityType $Severity
     * return FedEx_UploadDocumentService_Notification
     */
    public function setSeverity(FedEx_UploadDocumentService_NotificationSeverityType $severity)
    {
        $this->Severity = $severity;
        return $this;
    }
    
    /**
     * Indicates the source of the notification. Combined with Code, it uniqely identifies this message.
     *
     * @param string $Source
     * return FedEx_UploadDocumentService_Notification
     */
    public function setSource($source)
    {
        $this->Source = $source;
        return $this;
    }
    
    /**
     * A code that represents this notification. Combined with Source, it uniqely identifies this message.
     *
     * @param string $Code
     * return FedEx_UploadDocumentService_Notification
     */
    public function setCode($code)
    {
        $this->Code = $code;
        return $this;
    }
    
    /**
     * Text that explains this notification.
     *
     * @param string $Message
     * return FedEx_UploadDocumentService_Notification
     */
    public function setMessage($message)
    {
        $this->Message = $message;
        return $this;
    }
    
    /**
     * A translated message. The translation is based on the Localization element of the ClientDetail element of the request. Not currently supported.
     *
     * @param string $LocalizedMessage
     * return FedEx_UploadDocumentService_Notification
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
     * return FedEx_UploadDocumentService_Notification
     */
    public function setMessageParameters(array $messageParameters)
    {
        $this->MessageParameters = $messageParameters;
        return $this;
    }
    

    
}