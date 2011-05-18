<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Content Record.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_ContentRecord
    extends FedEx_AbstractComplexType
{

    /**
     * Part Number.
     *
     * @param string $PartNumber
     * return FedEx_ShipService_ContentRecord
     */
    public function setPartNumber($partNumber)
    {
        $this->PartNumber = $partNumber;
        return $this;
    }
    
    /**
     * Item Number.
     *
     * @param string $ItemNumber
     * return FedEx_ShipService_ContentRecord
     */
    public function setItemNumber($itemNumber)
    {
        $this->ItemNumber = $itemNumber;
        return $this;
    }
    
    /**
     * Received Quantity.
     *
     * @param nonNegativeInteger $ReceivedQuantity
     * return FedEx_ShipService_ContentRecord
     */
    public function setReceivedQuantity($receivedQuantity)
    {
        $this->ReceivedQuantity = $receivedQuantity;
        return $this;
    }
    
    /**
     * Description.
     *
     * @param string $Description
     * return FedEx_ShipService_ContentRecord
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    

    
}