<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Information relating to a return shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_ReturnShipmentDetail
    extends FedEx_AbstractComplexType
{

    /**
     * The type of return shipment that is being requested. At present the only type of retrun shipment that is supported is PRINT_RETURN_LABEL. With this option you can print a return label to insert into the box of an outbound shipment. This option can not be used to print an outbound label.
     *
     * @param ReturnType $ReturnType
     * return FedEx_RateService_ReturnShipmentDetail
     */
    public function setReturnType(FedEx_RateService_ReturnType $returnType)
    {
        $this->ReturnType = $returnType;
        return $this;
    }
    
    /**
     * Return Merchant Authorization
     *
     * @param Rma $Rma
     * return FedEx_RateService_ReturnShipmentDetail
     */
    public function setRma(FedEx_RateService_Rma $rma)
    {
        $this->Rma = $rma;
        return $this;
    }
    
    /**
     * Specific information about the delivery of the email and options for the shipment.
     *
     * @param ReturnEMailDetail $ReturnEMailDetail
     * return FedEx_RateService_ReturnShipmentDetail
     */
    public function setReturnEMailDetail(FedEx_RateService_ReturnEMailDetail $returnEMailDetail)
    {
        $this->ReturnEMailDetail = $returnEMailDetail;
        return $this;
    }
    

    
}