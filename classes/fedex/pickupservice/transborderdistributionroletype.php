<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifies the role that a transaction plays with respect to a distribution shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_PickupService_TransborderDistributionRoleType
    extends FedEx_AbstractSimpleType
{
    const _CHILD = 'CHILD';
    const _MASTER = 'MASTER';
}