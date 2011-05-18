<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the type of service for a pending shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_PickupService_PendingShipmentType
    extends FedEx_AbstractSimpleType
{
    const _EMAIL = 'EMAIL';
}