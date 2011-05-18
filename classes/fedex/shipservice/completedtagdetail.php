<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Provides reply information specific to a tag request.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_CompletedTagDetail
    extends FedEx_AbstractComplexType
{

    /**
     * .
     *
     * @param string $ConfirmationNumber
     * return FedEx_ShipService_CompletedTagDetail
     */
    public function setConfirmationNumber($confirmationNumber)
    {
        $this->ConfirmationNumber = $confirmationNumber;
        return $this;
    }
    
    /**
     * As of June 2007, returned only for FedEx Express services.
     *
     * @param duration $AccessTime
     * return FedEx_ShipService_CompletedTagDetail
     */
    public function setAccessTime($accessTime)
    {
        $this->AccessTime = $accessTime;
        return $this;
    }
    
    /**
     * As of June 2007, returned only for FedEx Express services.
     *
     * @param time $CutoffTime
     * return FedEx_ShipService_CompletedTagDetail
     */
    public function setCutoffTime($cutoffTime)
    {
        $this->CutoffTime = $cutoffTime;
        return $this;
    }
    
    /**
     * As of June 2007, returned only for FedEx Express services.
     *
     * @param string $Location
     * return FedEx_ShipService_CompletedTagDetail
     */
    public function setLocation($location)
    {
        $this->Location = $location;
        return $this;
    }
    
    /**
     * As of June 2007, returned only for FedEx Express services.
     *
     * @param dateTime $DeliveryCommitment
     * return FedEx_ShipService_CompletedTagDetail
     */
    public function setDeliveryCommitment($deliveryCommitment)
    {
        $this->DeliveryCommitment = $deliveryCommitment;
        return $this;
    }
    
    /**
     * FEDEX INTERNAL USE ONLY: for use by INET.
     *
     * @param date $DispatchDate
     * return FedEx_ShipService_CompletedTagDetail
     */
    public function setDispatchDate($dispatchDate)
    {
        $this->DispatchDate = $dispatchDate;
        return $this;
    }
    

    
}