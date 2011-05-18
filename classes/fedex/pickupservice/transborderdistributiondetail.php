<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_TransborderDistributionDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param TransborderDistributionType $Type
     * return FedEx_PickupService_TransborderDistributionDetail
     */
    public function setType(FedEx_PickupService_TransborderDistributionType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Specifies the role of the transaction with respect to a transborder distribution shipment.
     *
     * @param TransborderDistributionRoleType $Role
     * return FedEx_PickupService_TransborderDistributionDetail
     */
    public function setRole(FedEx_PickupService_TransborderDistributionRoleType $role)
    {
        $this->Role = $role;
        return $this;
    }
    
    /**
     * Tracking Id for the master.
     *
     * @param TrackingId $TrackingId
     * return FedEx_PickupService_TransborderDistributionDetail
     */
    public function setTrackingId(FedEx_PickupService_TrackingId $trackingId)
    {
        $this->TrackingId = $trackingId;
        return $this;
    }
    
    /**
     * Standard Carrier Alpha Code for carrier transporting the Transborder Distribution shipment from origin to destination country.
     *
     * @param string $OriginLtlScac
     * return FedEx_PickupService_TransborderDistributionDetail
     */
    public function setOriginLtlScac($originLtlScac)
    {
        $this->OriginLtlScac = $originLtlScac;
        return $this;
    }
    
    /**
     * Specifies features of service within a Transborder Distribution shipment.
     *
     * @param TransborderDistributionSpecialServicesRequested $SpecialServices
     * return FedEx_PickupService_TransborderDistributionDetail
     */
    public function setSpecialServices(FedEx_PickupService_TransborderDistributionSpecialServicesRequested $specialServices)
    {
        $this->SpecialServices = $specialServices;
        return $this;
    }
    

    
}