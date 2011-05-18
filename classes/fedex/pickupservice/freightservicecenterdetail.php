<?php defined('SYSPATH') or die('No direct script access.');

/**
 * This class describes the relationship between a customer-specified address and the FedEx Freight / FedEx National Freight Service Center that supports that address.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_FreightServiceCenterDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Freight Industry standard non-FedEx carrier identification
     *
     * @param string $InterlineCarrierCode
     * return FedEx_PickupService_FreightServiceCenterDetail
     */
    public function setInterlineCarrierCode($interlineCarrierCode)
    {
        $this->InterlineCarrierCode = $interlineCarrierCode;
        return $this;
    }
    
    /**
     * The name of the Interline carrier.
     *
     * @param string $InterlineCarrierName
     * return FedEx_PickupService_FreightServiceCenterDetail
     */
    public function setInterlineCarrierName($interlineCarrierName)
    {
        $this->InterlineCarrierName = $interlineCarrierName;
        return $this;
    }
    
    /**
     * Additional time it might take at the origin or destination to pickup or deliver the freight. This is usually due to the remoteness of the location. This time is included in the total transit time.
     *
     * @param int $AdditionalDays
     * return FedEx_PickupService_FreightServiceCenterDetail
     */
    public function setAdditionalDays($additionalDays)
    {
        $this->AdditionalDays = $additionalDays;
        return $this;
    }
    
    /**
     * Service branding which may be used for local pickup or delivery, distinct from service used for line-haul of customer's shipment.
     *
     * @param ServiceType $LocalService
     * return FedEx_PickupService_FreightServiceCenterDetail
     */
    public function setLocalService(FedEx_PickupService_ServiceType $localService)
    {
        $this->LocalService = $localService;
        return $this;
    }
    
    /**
     * Distance between customer address (pickup or delivery) and the supporting Freight / National Freight service center.
     *
     * @param Distance $LocalDistance
     * return FedEx_PickupService_FreightServiceCenterDetail
     */
    public function setLocalDistance(FedEx_PickupService_Distance $localDistance)
    {
        $this->LocalDistance = $localDistance;
        return $this;
    }
    
    /**
     * Time to travel between customer address (pickup or delivery) and the supporting Freight / National Freight service center.
     *
     * @param duration $LocalDuration
     * return FedEx_PickupService_FreightServiceCenterDetail
     */
    public function setLocalDuration($localDuration)
    {
        $this->LocalDuration = $localDuration;
        return $this;
    }
    
    /**
     * Specifies when/how the customer can arrange for pickup or delivery.
     *
     * @param FreightServiceSchedulingType $LocalServiceScheduling
     * return FedEx_PickupService_FreightServiceCenterDetail
     */
    public function setLocalServiceScheduling(FedEx_PickupService_FreightServiceSchedulingType $localServiceScheduling)
    {
        $this->LocalServiceScheduling = $localServiceScheduling;
        return $this;
    }
    
    /**
     * Specifies days of operation if localServiceScheduling is LIMITED.
     *
     * @param array[DayOfWeekType] $LimitedServiceDays
     * return FedEx_PickupService_FreightServiceCenterDetail
     */
    public function setLimitedServiceDays(array $limitedServiceDays)
    {
        $this->LimitedServiceDays = $limitedServiceDays;
        return $this;
    }
    
    /**
     * Freight service center that is a gateway on the border of Canada or Mexico.
     *
     * @param string $GatewayLocationId
     * return FedEx_PickupService_FreightServiceCenterDetail
     */
    public function setGatewayLocationId($gatewayLocationId)
    {
        $this->GatewayLocationId = $gatewayLocationId;
        return $this;
    }
    
    /**
     * Alphabetical code identifying a Freight Service Center
     *
     * @param string $Location
     * return FedEx_PickupService_FreightServiceCenterDetail
     */
    public function setLocation($location)
    {
        $this->Location = $location;
        return $this;
    }
    
    /**
     * Freight service center Contact and Address
     *
     * @param ContactAndAddress $ContactAndAddress
     * return FedEx_PickupService_FreightServiceCenterDetail
     */
    public function setContactAndAddress(FedEx_PickupService_ContactAndAddress $contactAndAddress)
    {
        $this->ContactAndAddress = $contactAndAddress;
        return $this;
    }
    

    
}