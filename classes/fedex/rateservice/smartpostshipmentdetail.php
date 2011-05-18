<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Data required for shipments handled under the SMART_POST and GROUND_SMART_POST service types.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_SmartPostShipmentDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param SmartPostIndiciaType $Indicia
     * return FedEx_RateService_SmartPostShipmentDetail
     */
    public function setIndicia(FedEx_RateService_SmartPostIndiciaType $indicia)
    {
        $this->Indicia = $indicia;
        return $this;
    }
    
    /**
     * 
     *
     * @param SmartPostAncillaryEndorsementType $AncillaryEndorsement
     * return FedEx_RateService_SmartPostShipmentDetail
     */
    public function setAncillaryEndorsement(FedEx_RateService_SmartPostAncillaryEndorsementType $ancillaryEndorsement)
    {
        $this->AncillaryEndorsement = $ancillaryEndorsement;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $HubId
     * return FedEx_RateService_SmartPostShipmentDetail
     */
    public function setHubId($hubId)
    {
        $this->HubId = $hubId;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $CustomerManifestId
     * return FedEx_RateService_SmartPostShipmentDetail
     */
    public function setCustomerManifestId($customerManifestId)
    {
        $this->CustomerManifestId = $customerManifestId;
        return $this;
    }
    

    
}