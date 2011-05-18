<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_LiabilityCoverageDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param LiabilityCoverageType $CoverageType
     * return FedEx_RateService_LiabilityCoverageDetail
     */
    public function setCoverageType(FedEx_RateService_LiabilityCoverageType $coverageType)
    {
        $this->CoverageType = $coverageType;
        return $this;
    }
    
    /**
     * Identifies the Liability Coverage Amount. For Jan 2010 this value represents coverage amount per pound
     *
     * @param Money $CoverageAmount
     * return FedEx_RateService_LiabilityCoverageDetail
     */
    public function setCoverageAmount(FedEx_RateService_Money $coverageAmount)
    {
        $this->CoverageAmount = $coverageAmount;
        return $this;
    }
    

    
}