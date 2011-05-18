<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_DeleteTagRequest
    extends FedEx_AbstractComplexType
{

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return FedEx_ShipService_DeleteTagRequest
     */
    public function setWebAuthenticationDetail(FedEx_ShipService_WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * Descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $ClientDetail
     * return FedEx_ShipService_DeleteTagRequest
     */
    public function setClientDetail(FedEx_ShipService_ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return FedEx_ShipService_DeleteTagRequest
     */
    public function setTransactionDetail(FedEx_ShipService_TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return FedEx_ShipService_DeleteTagRequest
     */
    public function setVersion(FedEx_ShipService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Only used for tags which had FedEx Express services.
     *
     * @param string $DispatchLocationId
     * return FedEx_ShipService_DeleteTagRequest
     */
    public function setDispatchLocationId($dispatchLocationId)
    {
        $this->DispatchLocationId = $dispatchLocationId;
        return $this;
    }
    
    /**
     * Only used for tags which had FedEx Express services.
     *
     * @param date $DispatchDate
     * return FedEx_ShipService_DeleteTagRequest
     */
    public function setDispatchDate($dispatchDate)
    {
        $this->DispatchDate = $dispatchDate;
        return $this;
    }
    
    /**
     * If the original ProcessTagRequest specified third-party payment, then the delete request must contain the same pay type and payor account number for security purposes.
     *
     * @param Payment $Payment
     * return FedEx_ShipService_DeleteTagRequest
     */
    public function setPayment(FedEx_ShipService_Payment $payment)
    {
        $this->Payment = $payment;
        return $this;
    }
    
    /**
     * Also known as Pickup Confirmation Number or Dispatch Number
     *
     * @param string $ConfirmationNumber
     * return FedEx_ShipService_DeleteTagRequest
     */
    public function setConfirmationNumber($confirmationNumber)
    {
        $this->ConfirmationNumber = $confirmationNumber;
        return $this;
    }
    

    
}