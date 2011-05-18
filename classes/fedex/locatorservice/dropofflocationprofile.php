<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data about the various drop off services.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_LocatorService_DropoffLocationProfile
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies if this location offers FedEx Express services.
     *
     * @param boolean $ExpressService
     * return FedEx_LocatorService_DropoffLocationProfile
     */
    public function setExpressService($expressService)
    {
        $this->ExpressService = $expressService;
        return $this;
    }
    
    /**
     * Identifies if this location offers FedEx Ground service.
     *
     * @param boolean $GroundService
     * return FedEx_LocatorService_DropoffLocationProfile
     */
    public function setGroundService($groundService)
    {
        $this->GroundService = $groundService;
        return $this;
    }
    
    /**
     * This location's weekday (Monday-Friday) hours of operation.
     *
     * @param string $HoursWeekdays
     * return FedEx_LocatorService_DropoffLocationProfile
     */
    public function setHoursWeekdays($hoursWeekdays)
    {
        $this->HoursWeekdays = $hoursWeekdays;
        return $this;
    }
    
    /**
     * This location's Saturday hours of operation.
     *
     * @param string $HoursSaturdays
     * return FedEx_LocatorService_DropoffLocationProfile
     */
    public function setHoursSaturdays($hoursSaturdays)
    {
        $this->HoursSaturdays = $hoursSaturdays;
        return $this;
    }
    
    /**
     * The time of day on weekdays by which FedEx Express packages must be dropped off for shipment that day.
     *
     * @param string $LastExpressDropoffTimeWeekdays
     * return FedEx_LocatorService_DropoffLocationProfile
     */
    public function setLastExpressDropoffTimeWeekdays($lastExpressDropoffTimeWeekdays)
    {
        $this->LastExpressDropoffTimeWeekdays = $lastExpressDropoffTimeWeekdays;
        return $this;
    }
    
    /**
     * The time of day on Saturdays by which FedEx Express packages must be dropped off for shipment that day.
     *
     * @param string $LastExpressDropoffTimeSaturdays
     * return FedEx_LocatorService_DropoffLocationProfile
     */
    public function setLastExpressDropoffTimeSaturdays($lastExpressDropoffTimeSaturdays)
    {
        $this->LastExpressDropoffTimeSaturdays = $lastExpressDropoffTimeSaturdays;
        return $this;
    }
    
    /**
     * The time of day on weekdays by which FedEx Ground packages must be dropped off for shipment that day.
     *
     * @param string $LastGroundDropoffTimeWeekdays
     * return FedEx_LocatorService_DropoffLocationProfile
     */
    public function setLastGroundDropoffTimeWeekdays($lastGroundDropoffTimeWeekdays)
    {
        $this->LastGroundDropoffTimeWeekdays = $lastGroundDropoffTimeWeekdays;
        return $this;
    }
    
    /**
     * The time of day on Saturdays by which FedEx Ground packages must be dropped off for shipment that day.
     *
     * @param string $LastGroundDropoffTimeSaturdays
     * return FedEx_LocatorService_DropoffLocationProfile
     */
    public function setLastGroundDropoffTimeSaturdays($lastGroundDropoffTimeSaturdays)
    {
        $this->LastGroundDropoffTimeSaturdays = $lastGroundDropoffTimeSaturdays;
        return $this;
    }
    
    /**
     * Identifies if this location offers Express HAL (Hold at Location) service.
     *
     * @param boolean $HoldAtLocation
     * return FedEx_LocatorService_DropoffLocationProfile
     */
    public function setHoldAtLocation($holdAtLocation)
    {
        $this->HoldAtLocation = $holdAtLocation;
        return $this;
    }
    
    /**
     * Identifies if this location offers Ground HAL (Hold at Location) service.
     *
     * @param boolean $GroundHoldAtLocation
     * return FedEx_LocatorService_DropoffLocationProfile
     */
    public function setGroundHoldAtLocation($groundHoldAtLocation)
    {
        $this->GroundHoldAtLocation = $groundHoldAtLocation;
        return $this;
    }
    
    /**
     * Identifies if this location accepts Hazardous materials.
     *
     * @param boolean $DangerousGoods
     * return FedEx_LocatorService_DropoffLocationProfile
     */
    public function setDangerousGoods($dangerousGoods)
    {
        $this->DangerousGoods = $dangerousGoods;
        return $this;
    }
    
    /**
     * Identifies if this location makes packaging supplies available.
     *
     * @param boolean $PackagingSupplies
     * return FedEx_LocatorService_DropoffLocationProfile
     */
    public function setPackagingSupplies($packagingSupplies)
    {
        $this->PackagingSupplies = $packagingSupplies;
        return $this;
    }
    
    /**
     * Identifies if this location provides Pack and Ship services.
     *
     * @param boolean $PackagingServices
     * return FedEx_LocatorService_DropoffLocationProfile
     */
    public function setPackagingServices($packagingServices)
    {
        $this->PackagingServices = $packagingServices;
        return $this;
    }
    
    /**
     * Identifies if this location supports FedEx Return System.
     *
     * @param boolean $ReturnSystem
     * return FedEx_LocatorService_DropoffLocationProfile
     */
    public function setReturnSystem($returnSystem)
    {
        $this->ReturnSystem = $returnSystem;
        return $this;
    }
    

    
}