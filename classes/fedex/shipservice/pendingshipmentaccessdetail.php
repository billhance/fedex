<?php defined('SYSPATH') or die('No direct script access.');

/**
 * This information describes how and when a pending shipment may be accessed for completion.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_PendingShipmentAccessDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Only for pending shipment type of "EMAIL"
     *
     * @param string $EmailLabelUrl
     * return FedEx_ShipService_PendingShipmentAccessDetail
     */
    public function setEmailLabelUrl($emailLabelUrl)
    {
        $this->EmailLabelUrl = $emailLabelUrl;
        return $this;
    }
    
    /**
     * Only for pending shipment type of "EMAIL"
     *
     * @param string $UserId
     * return FedEx_ShipService_PendingShipmentAccessDetail
     */
    public function setUserId($userId)
    {
        $this->UserId = $userId;
        return $this;
    }
    
    /**
     * Only for pending shipment type of "EMAIL"
     *
     * @param string $Password
     * return FedEx_ShipService_PendingShipmentAccessDetail
     */
    public function setPassword($password)
    {
        $this->Password = $password;
        return $this;
    }
    
    /**
     * This element is currently not supported and is for the future use.
     *
     * @param dateTime $ExpirationTimestamp
     * return FedEx_ShipService_PendingShipmentAccessDetail
     */
    public function setExpirationTimestamp($expirationTimestamp)
    {
        $this->ExpirationTimestamp = $expirationTimestamp;
        return $this;
    }
    

    
}