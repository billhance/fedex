<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_ContentRecord
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param string $PartNumber
     * return FedEx_RateService_ContentRecord
     */
    public function setPartNumber($partNumber)
    {
        $this->PartNumber = $partNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $ItemNumber
     * return FedEx_RateService_ContentRecord
     */
    public function setItemNumber($itemNumber)
    {
        $this->ItemNumber = $itemNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param nonNegativeInteger $ReceivedQuantity
     * return FedEx_RateService_ContentRecord
     */
    public function setReceivedQuantity($receivedQuantity)
    {
        $this->ReceivedQuantity = $receivedQuantity;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Description
     * return FedEx_RateService_ContentRecord
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    

    
}