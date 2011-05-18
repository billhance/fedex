<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_TransborderDistributionMasterDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param nonNegativeInteger $ExpressPackageCount
     * return FedEx_PickupService_TransborderDistributionMasterDetail
     */
    public function setExpressPackageCount($expressPackageCount)
    {
        $this->ExpressPackageCount = $expressPackageCount;
        return $this;
    }
    
    /**
     * 
     *
     * @param Weight $ExpressTotalPackageWeight
     * return FedEx_PickupService_TransborderDistributionMasterDetail
     */
    public function setExpressTotalPackageWeight(FedEx_PickupService_Weight $expressTotalPackageWeight)
    {
        $this->ExpressTotalPackageWeight = $expressTotalPackageWeight;
        return $this;
    }
    
    /**
     * 
     *
     * @param Weight $ExpressTotalPackageAdjustedWeight
     * return FedEx_PickupService_TransborderDistributionMasterDetail
     */
    public function setExpressTotalPackageAdjustedWeight(FedEx_PickupService_Weight $expressTotalPackageAdjustedWeight)
    {
        $this->ExpressTotalPackageAdjustedWeight = $expressTotalPackageAdjustedWeight;
        return $this;
    }
    
    /**
     * 
     *
     * @param nonNegativeInteger $ExpressFreightPackageCount
     * return FedEx_PickupService_TransborderDistributionMasterDetail
     */
    public function setExpressFreightPackageCount($expressFreightPackageCount)
    {
        $this->ExpressFreightPackageCount = $expressFreightPackageCount;
        return $this;
    }
    
    /**
     * 
     *
     * @param Weight $ExpressTotalFreightWeight
     * return FedEx_PickupService_TransborderDistributionMasterDetail
     */
    public function setExpressTotalFreightWeight(FedEx_PickupService_Weight $expressTotalFreightWeight)
    {
        $this->ExpressTotalFreightWeight = $expressTotalFreightWeight;
        return $this;
    }
    
    /**
     * 
     *
     * @param Weight $ExpressTotalFreightAdjustedWeight
     * return FedEx_PickupService_TransborderDistributionMasterDetail
     */
    public function setExpressTotalFreightAdjustedWeight(FedEx_PickupService_Weight $expressTotalFreightAdjustedWeight)
    {
        $this->ExpressTotalFreightAdjustedWeight = $expressTotalFreightAdjustedWeight;
        return $this;
    }
    
    /**
     * 
     *
     * @param nonNegativeInteger $GroundPackageCount
     * return FedEx_PickupService_TransborderDistributionMasterDetail
     */
    public function setGroundPackageCount($groundPackageCount)
    {
        $this->GroundPackageCount = $groundPackageCount;
        return $this;
    }
    
    /**
     * 
     *
     * @param Weight $GroundTotalPackageWeight
     * return FedEx_PickupService_TransborderDistributionMasterDetail
     */
    public function setGroundTotalPackageWeight(FedEx_PickupService_Weight $groundTotalPackageWeight)
    {
        $this->GroundTotalPackageWeight = $groundTotalPackageWeight;
        return $this;
    }
    
    /**
     * 
     *
     * @param Weight $GroundTotalPackageAdjustedWeight
     * return FedEx_PickupService_TransborderDistributionMasterDetail
     */
    public function setGroundTotalPackageAdjustedWeight(FedEx_PickupService_Weight $groundTotalPackageAdjustedWeight)
    {
        $this->GroundTotalPackageAdjustedWeight = $groundTotalPackageAdjustedWeight;
        return $this;
    }
    

    
}