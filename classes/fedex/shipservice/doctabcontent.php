<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_DocTabContent
    extends FedEx_AbstractComplexType
{

    /**
     * The DocTabContentType options available.
     *
     * @param DocTabContentType $DocTabContentType
     * return FedEx_ShipService_DocTabContent
     */
    public function setDocTabContentType(FedEx_ShipService_DocTabContentType $docTabContentType)
    {
        $this->DocTabContentType = $docTabContentType;
        return $this;
    }
    
    /**
     * The DocTabContentType should be set to ZONE001 to specify additional Zone details.
     *
     * @param DocTabContentZone001 $Zone001
     * return FedEx_ShipService_DocTabContent
     */
    public function setZone001(FedEx_ShipService_DocTabContentZone001 $zone001)
    {
        $this->Zone001 = $zone001;
        return $this;
    }
    
    /**
     * The DocTabContentType should be set to BARCODED to specify additional BarCoded details.
     *
     * @param DocTabContentBarcoded $Barcoded
     * return FedEx_ShipService_DocTabContent
     */
    public function setBarcoded(FedEx_ShipService_DocTabContentBarcoded $barcoded)
    {
        $this->Barcoded = $barcoded;
        return $this;
    }
    

    
}