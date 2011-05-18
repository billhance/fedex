<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Data required to produce the Freight handling-unit-level address labels. Note that the number of UNIQUE labels (the N as in 1 of N, 2 of N, etc.) is determined by total handling units.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_FreightAddressLabelDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param ShippingDocumentFormat $Format
     * return FedEx_ShipService_FreightAddressLabelDetail
     */
    public function setFormat(FedEx_ShipService_ShippingDocumentFormat $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Indicates the number of copies to be produced for each unique label.
     *
     * @param nonNegativeInteger $Copies
     * return FedEx_ShipService_FreightAddressLabelDetail
     */
    public function setCopies($copies)
    {
        $this->Copies = $copies;
        return $this;
    }
    
    /**
     * If omitted, no doc tab will be produced (i.e. default = former NONE type).
     *
     * @param DocTabContent $DocTabContent
     * return FedEx_ShipService_FreightAddressLabelDetail
     */
    public function setDocTabContent(FedEx_ShipService_DocTabContent $docTabContent)
    {
        $this->DocTabContent = $docTabContent;
        return $this;
    }
    

    
}