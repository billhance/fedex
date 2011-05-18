<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The weight method used to calculate the rate.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_ShipService_RatedWeightMethod
    extends FedEx_AbstractSimpleType
{
    const _ACTUAL = 'ACTUAL';
    const _AVERAGE_PACKAGE_WEIGHT_MINIMUM = 'AVERAGE_PACKAGE_WEIGHT_MINIMUM';
    const _BALLOON = 'BALLOON';
    const _DIM = 'DIM';
    const _FREIGHT_MINIMUM = 'FREIGHT_MINIMUM';
    const _MIXED = 'MIXED';
    const _OVERSIZE = 'OVERSIZE';
    const _OVERSIZE_1 = 'OVERSIZE_1';
    const _OVERSIZE_2 = 'OVERSIZE_2';
    const _OVERSIZE_3 = 'OVERSIZE_3';
    const _PACKAGING_MINIMUM = 'PACKAGING_MINIMUM';
    const _WEIGHT_BREAK = 'WEIGHT_BREAK';
}