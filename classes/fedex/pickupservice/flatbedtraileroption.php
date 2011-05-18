<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Optional features/characteristics requested for a Freight shipment utilizing a flatbed trailer.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_PickupService_FlatbedTrailerOption
    extends FedEx_AbstractSimpleType
{
    const _OVER_DIMENSION = 'OVER_DIMENSION';
    const _TARP = 'TARP';
}