<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specification for sorting and/or segregating performed on shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_SortAndSegregateDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Number of pieces or packages to be sorted/segregated
     *
     * @param nonNegativeInteger $PieceCount
     * return FedEx_PickupService_SortAndSegregateDetail
     */
    public function setPieceCount($pieceCount)
    {
        $this->PieceCount = $pieceCount;
        return $this;
    }
    
    /**
     * Total weight of pieces or packages to be sorted/segregated
     *
     * @param Weight $Weight
     * return FedEx_PickupService_SortAndSegregateDetail
     */
    public function setWeight(FedEx_PickupService_Weight $weight)
    {
        $this->Weight = $weight;
        return $this;
    }
    

    
}