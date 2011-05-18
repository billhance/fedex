<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_CodReturnShipmentDetail
    extends FedEx_AbstractComplexType
{

    /**
     * The COD amount (after any accumulations) that must be collected upon delivery of a package shipped using the COD special service.
     *
     * @param Money $CollectionAmount
     * return FedEx_ShipService_CodReturnShipmentDetail
     */
    public function setCollectionAmount(FedEx_ShipService_Money $collectionAmount)
    {
        $this->CollectionAmount = $collectionAmount;
        return $this;
    }
    
    /**
     * Currently not supported.
     *
     * @param string $Handling
     * return FedEx_ShipService_CodReturnShipmentDetail
     */
    public function setHandling($handling)
    {
        $this->Handling = $handling;
        return $this;
    }
    
    /**
     * The description of the FedEx service type used for the COD return shipment. Currently not supported.
     *
     * @param string $ServiceTypeDescription
     * return FedEx_ShipService_CodReturnShipmentDetail
     */
    public function setServiceTypeDescription($serviceTypeDescription)
    {
        $this->ServiceTypeDescription = $serviceTypeDescription;
        return $this;
    }
    
    /**
     * The description of the packaging used for the COD return shipment.
     *
     * @param string $PackagingDescription
     * return FedEx_ShipService_CodReturnShipmentDetail
     */
    public function setPackagingDescription($packagingDescription)
    {
        $this->PackagingDescription = $packagingDescription;
        return $this;
    }
    
    /**
     * Currently not supported.
     *
     * @param string $SecuredDescription
     * return FedEx_ShipService_CodReturnShipmentDetail
     */
    public function setSecuredDescription($securedDescription)
    {
        $this->SecuredDescription = $securedDescription;
        return $this;
    }
    
    /**
     * Currently not supported.
     *
     * @param Party $Remitter
     * return FedEx_ShipService_CodReturnShipmentDetail
     */
    public function setRemitter(FedEx_ShipService_Party $remitter)
    {
        $this->Remitter = $remitter;
        return $this;
    }
    
    /**
     * Currently not supported.
     *
     * @param Party $CodRecipient
     * return FedEx_ShipService_CodReturnShipmentDetail
     */
    public function setCodRecipient(FedEx_ShipService_Party $codRecipient)
    {
        $this->CodRecipient = $codRecipient;
        return $this;
    }
    
    /**
     * 
                The CodRoutingDetail element will contain the COD return tracking number and form id. In the case of a COD multiple piece shipment these will need to be inserted in the request for the last piece of the multiple piece shipment.
                The service commitment is the only other element of the RoutingDetail that is used for a CodRoutingDetail.
              
     *
     * @param RoutingDetail $CodRoutingDetail
     * return FedEx_ShipService_CodReturnShipmentDetail
     */
    public function setCodRoutingDetail(FedEx_ShipService_RoutingDetail $codRoutingDetail)
    {
        $this->CodRoutingDetail = $codRoutingDetail;
        return $this;
    }
    
    /**
     * Contains the data which form the Astra and 2DCommon barcodes that print on the COD return label.
     *
     * @param PackageBarcodes $Barcodes
     * return FedEx_ShipService_CodReturnShipmentDetail
     */
    public function setBarcodes(FedEx_ShipService_PackageBarcodes $barcodes)
    {
        $this->Barcodes = $barcodes;
        return $this;
    }
    
    /**
     * The label image or printer commands to print the label.
     *
     * @param ShippingDocument $Label
     * return FedEx_ShipService_CodReturnShipmentDetail
     */
    public function setLabel(FedEx_ShipService_ShippingDocument $label)
    {
        $this->Label = $label;
        return $this;
    }
    

    
}