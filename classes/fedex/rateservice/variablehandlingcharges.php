<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The variable handling charges calculated based on the type variable handling charges requested.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_VariableHandlingCharges
    extends FedEx_AbstractComplexType
{

    /**
     * The variable handling charge amount calculated based on the requested variable handling charge detail.
     *
     * @param Money $VariableHandlingCharge
     * return FedEx_RateService_VariableHandlingCharges
     */
    public function setVariableHandlingCharge(FedEx_RateService_Money $variableHandlingCharge)
    {
        $this->VariableHandlingCharge = $variableHandlingCharge;
        return $this;
    }
    
    /**
     * The calculated varibale handling charge plus the net charge.
     *
     * @param Money $TotalCustomerCharge
     * return FedEx_RateService_VariableHandlingCharges
     */
    public function setTotalCustomerCharge(FedEx_RateService_Money $totalCustomerCharge)
    {
        $this->TotalCustomerCharge = $totalCustomerCharge;
        return $this;
    }
    

    
}