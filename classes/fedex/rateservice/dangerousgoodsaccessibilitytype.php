<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies whether or not the products being shipped are required to be accessible during delivery.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_DangerousGoodsAccessibilityType
    extends FedEx_AbstractSimpleType
{
    const _ACCESSIBLE = 'ACCESSIBLE';
    const _INACCESSIBLE = 'INACCESSIBLE';
}