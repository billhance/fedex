<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifications for pallets to be shrinkwrapped as part of a Freight shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_PalletShrinkwrapDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Number of pallets to be shrinkwrapped.
     *
     * @param positiveInteger $PalletCount
     * return FedEx_PickupService_PalletShrinkwrapDetail
     */
    public function setPalletCount($palletCount)
    {
        $this->PalletCount = $palletCount;
        return $this;
    }
    

    
}