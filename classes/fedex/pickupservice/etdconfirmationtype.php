<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifies whether to confirm documents prior to processing a shipment with the ELECTRONIC_TRADE_DOCUMENTS special service.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_PickupService_EtdConfirmationType
    extends FedEx_AbstractSimpleType
{
    const _CONFIRMED = 'CONFIRMED';
    const _DEFERRED = 'DEFERRED';
}