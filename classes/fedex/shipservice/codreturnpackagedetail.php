<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_CodReturnPackageDetail
    extends FedEx_AbstractComplexType
{

    /**
     * The COD amount (after any accumulations) that must be collected upon delivery of a package shipped using the COD special service.
     *
     * @param Money $CollectionAmount
     * return FedEx_ShipService_CodReturnPackageDetail
     */
    public function setCollectionAmount(FedEx_ShipService_Money $collectionAmount)
    {
        $this->CollectionAmount = $collectionAmount;
        return $this;
    }
    
    /**
     * 
     *
     * @param boolean $Electronic
     * return FedEx_ShipService_CodReturnPackageDetail
     */
    public function setElectronic($electronic)
    {
        $this->Electronic = $electronic;
        return $this;
    }
    
    /**
     * Contains the data which form the Astra and 2DCommon barcodes that print on the COD return label.
     *
     * @param PackageBarcodes $Barcodes
     * return FedEx_ShipService_CodReturnPackageDetail
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
     * return FedEx_ShipService_CodReturnPackageDetail
     */
    public function setLabel(FedEx_ShipService_ShippingDocument $label)
    {
        $this->Label = $label;
        return $this;
    }
    

    
}