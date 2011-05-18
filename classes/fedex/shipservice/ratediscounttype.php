<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The type of the discount.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_ShipService_RateDiscountType
    extends FedEx_AbstractSimpleType
{
    const _BONUS = 'BONUS';
    const _COUPON = 'COUPON';
    const _EARNED = 'EARNED';
    const _INCENTIVE = 'INCENTIVE';
    const _OTHER = 'OTHER';
    const _VOLUME = 'VOLUME';
}