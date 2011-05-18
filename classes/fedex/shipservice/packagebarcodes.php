<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Each instance of this data type represents the set of barcodes (of all types) which are associated with a specific package.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_PackageBarcodes
    extends FedEx_AbstractComplexType
{

    /**
     * Binary-style barcodes for this package.
     *
     * @param array[BinaryBarcode] $BinaryBarcodes
     * return FedEx_ShipService_PackageBarcodes
     */
    public function setBinaryBarcodes(array $binaryBarcodes)
    {
        $this->BinaryBarcodes = $binaryBarcodes;
        return $this;
    }
    
    /**
     * String-style barcodes for this package.
     *
     * @param array[StringBarcode] $StringBarcodes
     * return FedEx_ShipService_PackageBarcodes
     */
    public function setStringBarcodes(array $stringBarcodes)
    {
        $this->StringBarcodes = $stringBarcodes;
        return $this;
    }
    

    
}