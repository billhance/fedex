<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifications for pallets to be provided on Freight shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_PalletsProvidedDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Number of pallets to be provided.
     *
     * @param positiveInteger $PalletCount
     * return FedEx_PickupService_PalletsProvidedDetail
     */
    public function setPalletCount($palletCount)
    {
        $this->PalletCount = $palletCount;
        return $this;
    }
    

    
}