<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies types of special equipment used in loading/unloading Freight shipments
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_PickupService_SpecialEquipmentType
    extends FedEx_AbstractSimpleType
{
    const _FORK_LIFT = 'FORK_LIFT';
}