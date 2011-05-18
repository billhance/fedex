<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data to cancel a shipment pickup request.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_CancelPickupRequest
    extends FedEx_AbstractComplexType
{

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return FedEx_PickupService_CancelPickupRequest
     */
    public function setWebAuthenticationDetail(FedEx_PickupService_WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * The descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $ClientDetail
     * return FedEx_PickupService_CancelPickupRequest
     */
    public function setClientDetail(FedEx_PickupService_ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * The descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return FedEx_PickupService_CancelPickupRequest
     */
    public function setTransactionDetail(FedEx_PickupService_TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return FedEx_PickupService_CancelPickupRequest
     */
    public function setVersion(FedEx_PickupService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Identifies the FedEx operating company (transportation) that was sent the pickup that is being canceled.
     *
     * @param CarrierCodeType $CarrierCode
     * return FedEx_PickupService_CancelPickupRequest
     */
    public function setCarrierCode(FedEx_PickupService_CarrierCodeType $carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * Identifies the pickup confirmation number that is being canceled. The pickup confirmation number was returned to the client when the pickup was requested.
     *
     * @param string $PickupConfirmationNumber
     * return FedEx_PickupService_CancelPickupRequest
     */
    public function setPickupConfirmationNumber($pickupConfirmationNumber)
    {
        $this->PickupConfirmationNumber = $pickupConfirmationNumber;
        return $this;
    }
    
    /**
     * Identifies the scheduled date for the pickup that is being canceled. The scheduled date was provided by the client when the pickup was requested.
     *
     * @param date $ScheduledDate
     * return FedEx_PickupService_CancelPickupRequest
     */
    public function setScheduledDate($scheduledDate)
    {
        $this->ScheduledDate = $scheduledDate;
        return $this;
    }
    
    /**
     * Identifies the FedEx location identifier responsible for processing the package pickup that is being canceled. The FedEx location identifier was returned to the client when the pickup was requested. Required for Express service type.
     *
     * @param string $Location
     * return FedEx_PickupService_CancelPickupRequest
     */
    public function setLocation($location)
    {
        $this->Location = $location;
        return $this;
    }
    
    /**
     * Identifies comments the customer wants to convey to the FedEx courier regarding the package pickup.
     *
     * @param string $Remarks
     * return FedEx_PickupService_CancelPickupRequest
     */
    public function setRemarks($remarks)
    {
        $this->Remarks = $remarks;
        return $this;
    }
    
    /**
     * 
     *
     * @param Payment $ShippingChargesPayment
     * return FedEx_PickupService_CancelPickupRequest
     */
    public function setShippingChargesPayment(FedEx_PickupService_Payment $shippingChargesPayment)
    {
        $this->ShippingChargesPayment = $shippingChargesPayment;
        return $this;
    }
    
    /**
     * The reason for canceling the pickup request.
     *
     * @param string $Reason
     * return FedEx_PickupService_CancelPickupRequest
     */
    public function setReason($reason)
    {
        $this->Reason = $reason;
        return $this;
    }
    
    /**
     * Identifies the name of the person that requested pickup cancellation.
     *
     * @param string $ContactName
     * return FedEx_PickupService_CancelPickupRequest
     */
    public function setContactName($contactName)
    {
        $this->ContactName = $contactName;
        return $this;
    }
    

    
}