<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Descriptive data regarding a FedEx freight service pickup request.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_FreightPickupDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Contact Information of origin service center representative that authorized the pickup
     *
     * @param Contact $ApprovedBy
     * return FedEx_PickupService_FreightPickupDetail
     */
    public function setApprovedBy(FedEx_PickupService_Contact $approvedBy)
    {
        $this->ApprovedBy = $approvedBy;
        return $this;
    }
    
    /**
     * Identifies the type of payment to be tendered for the pickup.
     *
     * @param FreightAccountPaymentType $Payment
     * return FedEx_PickupService_FreightPickupDetail
     */
    public function setPayment(FedEx_PickupService_FreightAccountPaymentType $payment)
    {
        $this->Payment = $payment;
        return $this;
    }
    
    /**
     * Indicates the role of the party submitting the transaction.
     *
     * @param FreightShipmentRoleType $Role
     * return FedEx_PickupService_FreightPickupDetail
     */
    public function setRole(FedEx_PickupService_FreightShipmentRoleType $role)
    {
        $this->Role = $role;
        return $this;
    }
    
    /**
     * Contact Information of the person submitting the pickup.
     *
     * @param Contact $SubmittedBy
     * return FedEx_PickupService_FreightPickupDetail
     */
    public function setSubmittedBy(FedEx_PickupService_Contact $submittedBy)
    {
        $this->SubmittedBy = $submittedBy;
        return $this;
    }
    
    /**
     * Identifies the collection of available FedEx transportation service options. Must be a valid FedEx freight service identifier.
     *
     * @param ServiceType $Service
     * return FedEx_PickupService_FreightPickupDetail
     */
    public function setService(FedEx_PickupService_ServiceType $service)
    {
        $this->Service = $service;
        return $this;
    }
    
    /**
     * Identifies the details about the contents of the shipments to be picked up.
     *
     * @param array[FreightPickupLineItem] $LineItems
     * return FedEx_PickupService_FreightPickupDetail
     */
    public function setLineItems(array $lineItems)
    {
        $this->LineItems = $lineItems;
        return $this;
    }
    

    
}