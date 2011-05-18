<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the valid set of truck types supported by FedEx. This type is appropriate only for freight pickup requests.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_PickupService_TruckType
    extends FedEx_AbstractSimpleType
{
    const _DROP_TRAILER_AGREEMENT = 'DROP_TRAILER_AGREEMENT';
    const _LIFTGATE = 'LIFTGATE';
    const _TRACTOR_TRAILER_ACCESS = 'TRACTOR_TRAILER_ACCESS';
}