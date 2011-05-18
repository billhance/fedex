<?php defined('SYSPATH') or die('No direct script access.');

/**
 * This information describes the kind of pending shipment being requested.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_PendingShipmentDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the type of FedEx pending shipment
     *
     * @param PendingShipmentType $Type
     * return FedEx_PickupService_PendingShipmentDetail
     */
    public function setType(FedEx_PickupService_PendingShipmentType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Date after which the pending shipment will no longer be available for completion.
     *
     * @param date $ExpirationDate
     * return FedEx_PickupService_PendingShipmentDetail
     */
    public function setExpirationDate($expirationDate)
    {
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    
    /**
     * Only used with type of EMAIL.
     *
     * @param EMailLabelDetail $EmailLabelDetail
     * return FedEx_PickupService_PendingShipmentDetail
     */
    public function setEmailLabelDetail(FedEx_PickupService_EMailLabelDetail $emailLabelDetail)
    {
        $this->EmailLabelDetail = $emailLabelDetail;
        return $this;
    }
    

    
}