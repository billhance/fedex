<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Information about the Freight Service Centers associated with this shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_FreightCommitDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Information about the origin Freight Service Center.
     *
     * @param FreightServiceCenterDetail $OriginDetail
     * return FedEx_RateService_FreightCommitDetail
     */
    public function setOriginDetail(FedEx_RateService_FreightServiceCenterDetail $originDetail)
    {
        $this->OriginDetail = $originDetail;
        return $this;
    }
    
    /**
     * Information about the destination Freight Service Center.
     *
     * @param FreightServiceCenterDetail $DestinationDetail
     * return FedEx_RateService_FreightCommitDetail
     */
    public function setDestinationDetail(FedEx_RateService_FreightServiceCenterDetail $destinationDetail)
    {
        $this->DestinationDetail = $destinationDetail;
        return $this;
    }
    
    /**
     * The distance between the origin and destination FreightService Centers
     *
     * @param Distance $TotalDistance
     * return FedEx_RateService_FreightCommitDetail
     */
    public function setTotalDistance(FedEx_RateService_Distance $totalDistance)
    {
        $this->TotalDistance = $totalDistance;
        return $this;
    }
    

    
}