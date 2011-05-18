<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the type of pickup request service.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_ShipService_PickupRequestType
    extends FedEx_AbstractSimpleType
{
    const _FUTURE_DAY = 'FUTURE_DAY';
    const _SAME_DAY = 'SAME_DAY';
}