<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Returned for cargo shipments only when they are currently split across vehicles.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_TrackService_TrackSplitShipmentPart
    extends FedEx_AbstractComplexType
{

    /**
     * Number of pieces/skids traveling together.
     *
     * @param int $PieceCount
     * return FedEx_TrackService_TrackSplitShipmentPart
     */
    public function setPieceCount($pieceCount)
    {
        $this->PieceCount = $pieceCount;
        return $this;
    }
    
    /**
     * Time this package was delivered.
     *
     * @param dateTime $Timestamp
     * return FedEx_TrackService_TrackSplitShipmentPart
     */
    public function setTimestamp($timestamp)
    {
        $this->Timestamp = $timestamp;
        return $this;
    }
    
    /**
     * The most recent status code for this specific split.
     *
     * @param string $StatusCode
     * return FedEx_TrackService_TrackSplitShipmentPart
     */
    public function setStatusCode($statusCode)
    {
        $this->StatusCode = $statusCode;
        return $this;
    }
    
    /**
     * The most recent status description for a specific split.
     *
     * @param string $StatusDescription
     * return FedEx_TrackService_TrackSplitShipmentPart
     */
    public function setStatusDescription($statusDescription)
    {
        $this->StatusDescription = $statusDescription;
        return $this;
    }
    

    
}