<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifies how the commodity is to be labeled.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_HazardousCommodityLabelTextOptionType
    extends FedEx_AbstractSimpleType
{
    const _APPEND = 'APPEND';
    const _OVERRIDE = 'OVERRIDE';
    const _STANDARD = 'STANDARD';
}