<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_PickupService_EMailNotificationAggregationType
    extends FedEx_AbstractSimpleType
{
    const _PER_PACKAGE = 'PER_PACKAGE';
    const _PER_SHIPMENT = 'PER_SHIPMENT';
}