<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the valid set of building part types when requesting a package pickup.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_PickupService_BuildingPartCode
    extends FedEx_AbstractSimpleType
{
    const _APARTMENT = 'APARTMENT';
    const _BUILDING = 'BUILDING';
    const _DEPARTMENT = 'DEPARTMENT';
    const _FLOOR = 'FLOOR';
    const _ROOM = 'ROOM';
    const _SUITE = 'SUITE';
}