<?php defined('SYSPATH') or die('No direct script access.');

/**
 * TrackingIdType
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_PickupService_TrackingIdType
    extends FedEx_AbstractSimpleType
{
    const _EXPRESS = 'EXPRESS';
    const _FREIGHT = 'FREIGHT';
    const _GROUND = 'GROUND';
    const _INTERNAL = 'INTERNAL';
    const _UNKNOWN = 'UNKNOWN';
    const _USPS = 'USPS';
}