<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies which type minimum charge was applied.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_ShipService_MinimumChargeType
    extends FedEx_AbstractSimpleType
{
    const _CUSTOMER = 'CUSTOMER';
    const _CUSTOMER_FREIGHT_WEIGHT = 'CUSTOMER_FREIGHT_WEIGHT';
    const _EARNED_DISCOUNT = 'EARNED_DISCOUNT';
    const _MIXED = 'MIXED';
    const _RATE_SCALE = 'RATE_SCALE';
}