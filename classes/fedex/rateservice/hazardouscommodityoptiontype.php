<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Indicates which kind of hazardous content (as defined by DOT) is being reported.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_HazardousCommodityOptionType
    extends FedEx_AbstractSimpleType
{
    const _HAZARDOUS_MATERIALS = 'HAZARDOUS_MATERIALS';
    const _LITHIUM_BATTERY_EXCEPTION = 'LITHIUM_BATTERY_EXCEPTION';
    const _ORM_D = 'ORM_D';
    const _REPORTABLE_QUANTITIES = 'REPORTABLE_QUANTITIES';
    const _SMALL_QUANTITY_EXCEPTION = 'SMALL_QUANTITY_EXCEPTION';
}