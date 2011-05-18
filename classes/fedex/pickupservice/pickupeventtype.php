<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Status of the pickup
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_PickupService_PickupEventType
    extends FedEx_AbstractSimpleType
{
    const _ASSIGNED_TO_DRIVER = 'ASSIGNED_TO_DRIVER';
    const _CANCELED = 'CANCELED';
    const _EXCEPTION = 'EXCEPTION';
    const _PICKED_UP = 'PICKED_UP';
    const _SCHEDULED = 'SCHEDULED';
}