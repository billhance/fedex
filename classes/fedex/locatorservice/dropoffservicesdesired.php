<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data about the various drop off services.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_LocatorService_DropoffServicesDesired
    extends FedEx_AbstractComplexType
{

    /**
     * Locations that accept FedEx Express shipments.
     *
     * @param boolean $Express
     * return FedEx_LocatorService_DropoffServicesDesired
     */
    public function setExpress($express)
    {
        $this->Express = $express;
        return $this;
    }
    
    /**
     * Locations that accept FedEx Ground shipments.
     *
     * @param boolean $Ground
     * return FedEx_LocatorService_DropoffServicesDesired
     */
    public function setGround($ground)
    {
        $this->Ground = $ground;
        return $this;
    }
    
    /**
     * Locations that are FedEx staffed.
     *
     * @param boolean $FedExStaffed
     * return FedEx_LocatorService_DropoffServicesDesired
     */
    public function setFedExStaffed($fedExStaffed)
    {
        $this->FedExStaffed = $fedExStaffed;
        return $this;
    }
    
    /**
     * Locations that are FedEx self-service.
     *
     * @param boolean $FedExSelfService
     * return FedEx_LocatorService_DropoffServicesDesired
     */
    public function setFedExSelfService($fedExSelfService)
    {
        $this->FedExSelfService = $fedExSelfService;
        return $this;
    }
    
    /**
     * Locations that are FedEx Authorized Shipping Centers.
     *
     * @param boolean $FedExAuthorizedShippingCenter
     * return FedEx_LocatorService_DropoffServicesDesired
     */
    public function setFedExAuthorizedShippingCenter($fedExAuthorizedShippingCenter)
    {
        $this->FedExAuthorizedShippingCenter = $fedExAuthorizedShippingCenter;
        return $this;
    }
    
    /**
     * Locations with the latest Express drop-off time.
     *
     * @param boolean $LatestExpressDropoff
     * return FedEx_LocatorService_DropoffServicesDesired
     */
    public function setLatestExpressDropoff($latestExpressDropoff)
    {
        $this->LatestExpressDropoff = $latestExpressDropoff;
        return $this;
    }
    
    /**
     * Locations that are open after this local time.
     *
     * @param time $ExpressDropoffAfterTime
     * return FedEx_LocatorService_DropoffServicesDesired
     */
    public function setExpressDropoffAfterTime($expressDropoffAfterTime)
    {
        $this->ExpressDropoffAfterTime = $expressDropoffAfterTime;
        return $this;
    }
    
    /**
     * Locations that support Express Hold at Location.
     *
     * @param boolean $HoldAtLocation
     * return FedEx_LocatorService_DropoffServicesDesired
     */
    public function setHoldAtLocation($holdAtLocation)
    {
        $this->HoldAtLocation = $holdAtLocation;
        return $this;
    }
    
    /**
     * Locations that support Ground Hold at Location.
     *
     * @param boolean $GroundHoldAtLocation
     * return FedEx_LocatorService_DropoffServicesDesired
     */
    public function setGroundHoldAtLocation($groundHoldAtLocation)
    {
        $this->GroundHoldAtLocation = $groundHoldAtLocation;
        return $this;
    }
    
    /**
     * Locations that accept FedEx Express shipments containing hazardous materials.
     *
     * @param boolean $DangerousGoods
     * return FedEx_LocatorService_DropoffServicesDesired
     */
    public function setDangerousGoods($dangerousGoods)
    {
        $this->DangerousGoods = $dangerousGoods;
        return $this;
    }
    
    /**
     * Locations open on Saturdays.
     *
     * @param boolean $SaturdayService
     * return FedEx_LocatorService_DropoffServicesDesired
     */
    public function setSaturdayService($saturdayService)
    {
        $this->SaturdayService = $saturdayService;
        return $this;
    }
    
    /**
     * Locations that make packaging supplies available.
     *
     * @param boolean $PackingSupplies
     * return FedEx_LocatorService_DropoffServicesDesired
     */
    public function setPackingSupplies($packingSupplies)
    {
        $this->PackingSupplies = $packingSupplies;
        return $this;
    }
    
    /**
     * Locations that provide Pack and Ship services.
     *
     * @param boolean $PackingServices
     * return FedEx_LocatorService_DropoffServicesDesired
     */
    public function setPackingServices($packingServices)
    {
        $this->PackingServices = $packingServices;
        return $this;
    }
    
    /**
     * Locations that support FedEx	Return System.
     *
     * @param boolean $ReturnSystem
     * return FedEx_LocatorService_DropoffServicesDesired
     */
    public function setReturnSystem($returnSystem)
    {
        $this->ReturnSystem = $returnSystem;
        return $this;
    }
    
    /**
     * Locations that support Redirect to Hold of shipments.
     *
     * @param RedirectToHoldLocationType $RedirectToHoldLocation
     * return FedEx_LocatorService_DropoffServicesDesired
     */
    public function setRedirectToHoldLocation(FedEx_LocatorService_RedirectToHoldLocationType $redirectToHoldLocation)
    {
        $this->RedirectToHoldLocation = $redirectToHoldLocation;
        return $this;
    }
    
    /**
     * Locations in the same state that support Redirect to Hold of shipments.
     *
     * @param boolean $SearchSameStateOnly
     * return FedEx_LocatorService_DropoffServicesDesired
     */
    public function setSearchSameStateOnly($searchSameStateOnly)
    {
        $this->SearchSameStateOnly = $searchSameStateOnly;
        return $this;
    }
    

    
}