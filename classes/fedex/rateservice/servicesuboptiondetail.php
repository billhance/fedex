<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Supporting detail for applied options identified in a rate quote.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_ServiceSubOptionDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the type of Freight Guarantee applied, if FREIGHT_GUARANTEE is applied to the rate quote.
     *
     * @param FreightGuaranteeType $FreightGuarantee
     * return FedEx_RateService_ServiceSubOptionDetail
     */
    public function setFreightGuarantee(FedEx_RateService_FreightGuaranteeType $freightGuarantee)
    {
        $this->FreightGuarantee = $freightGuarantee;
        return $this;
    }
    
    /**
     * Identifies the smartPostHubId used during rate quote, if SMART_POST_HUB_ID is a variable option on the rate request.
     *
     * @param string $SmartPostHubId
     * return FedEx_RateService_ServiceSubOptionDetail
     */
    public function setSmartPostHubId($smartPostHubId)
    {
        $this->SmartPostHubId = $smartPostHubId;
        return $this;
    }
    
    /**
     * Identifies the indicia used during rate quote, if SMART_POST_ALLOWED_INDICIA is a variable option on the rate request.
     *
     * @param SmartPostIndiciaType $SmartPostIndicia
     * return FedEx_RateService_ServiceSubOptionDetail
     */
    public function setSmartPostIndicia(FedEx_RateService_SmartPostIndiciaType $smartPostIndicia)
    {
        $this->SmartPostIndicia = $smartPostIndicia;
        return $this;
    }
    

    
}