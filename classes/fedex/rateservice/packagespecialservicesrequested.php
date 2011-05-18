<?php defined('SYSPATH') or die('No direct script access.');

/**
 * These special services are available at the package level for some or all service types. If the shipper is requesting a special service which requires additional data, the package special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_PackageSpecialServicesRequested
    extends FedEx_AbstractComplexType
{

    /**
     * The types of all special services requested for the enclosing shipment or package.
     *
     * @param array[PackageSpecialServiceType] $SpecialServiceTypes
     * return FedEx_RateService_PackageSpecialServicesRequested
     */
    public function setSpecialServiceTypes(array $specialServiceTypes)
    {
        $this->SpecialServiceTypes = $specialServiceTypes;
        return $this;
    }
    
    /**
     * For use with FedEx Ground services only; COD must be present in shipment's special services.
     *
     * @param CodDetail $CodDetail
     * return FedEx_RateService_PackageSpecialServicesRequested
     */
    public function setCodDetail(FedEx_RateService_CodDetail $codDetail)
    {
        $this->CodDetail = $codDetail;
        return $this;
    }
    
    /**
     * Descriptive data required for a FedEx shipment containing dangerous materials. This element is required when SpecialServiceType.DANGEROUS_GOODS or HAZARDOUS_MATERIAL is present in the SpecialServiceTypes collection.
     *
     * @param DangerousGoodsDetail $DangerousGoodsDetail
     * return FedEx_RateService_PackageSpecialServicesRequested
     */
    public function setDangerousGoodsDetail(FedEx_RateService_DangerousGoodsDetail $dangerousGoodsDetail)
    {
        $this->DangerousGoodsDetail = $dangerousGoodsDetail;
        return $this;
    }
    
    /**
     * Descriptive data required for a FedEx shipment containing dry ice. This element is required when SpecialServiceType.DRY_ICE is present in the SpecialServiceTypes collection.
     *
     * @param Weight $DryIceWeight
     * return FedEx_RateService_PackageSpecialServicesRequested
     */
    public function setDryIceWeight(FedEx_RateService_Weight $dryIceWeight)
    {
        $this->DryIceWeight = $dryIceWeight;
        return $this;
    }
    
    /**
     * The descriptive data required for FedEx signature services. This element is required when SpecialServiceType.SIGNATURE_OPTION is present in the SpecialServiceTypes collection.
     *
     * @param SignatureOptionDetail $SignatureOptionDetail
     * return FedEx_RateService_PackageSpecialServicesRequested
     */
    public function setSignatureOptionDetail(FedEx_RateService_SignatureOptionDetail $signatureOptionDetail)
    {
        $this->SignatureOptionDetail = $signatureOptionDetail;
        return $this;
    }
    
    /**
     * To be filled.
     *
     * @param PriorityAlertDetail $PriorityAlertDetail
     * return FedEx_RateService_PackageSpecialServicesRequested
     */
    public function setPriorityAlertDetail(FedEx_RateService_PriorityAlertDetail $priorityAlertDetail)
    {
        $this->PriorityAlertDetail = $priorityAlertDetail;
        return $this;
    }
    

    
}