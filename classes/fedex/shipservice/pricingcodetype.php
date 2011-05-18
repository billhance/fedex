<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the type of pricing used for this shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_ShipService_PricingCodeType
    extends FedEx_AbstractSimpleType
{
    const _ACTUAL = 'ACTUAL';
    const _ALTERNATE = 'ALTERNATE';
    const _BASE = 'BASE';
    const _HUNDREDWEIGHT = 'HUNDREDWEIGHT';
    const _HUNDREDWEIGHT_ALTERNATE = 'HUNDREDWEIGHT_ALTERNATE';
    const _INTERNATIONAL_DISTRIBUTION = 'INTERNATIONAL_DISTRIBUTION';
    const _INTERNATIONAL_ECONOMY_SERVICE = 'INTERNATIONAL_ECONOMY_SERVICE';
    const _LTL_FREIGHT = 'LTL_FREIGHT';
    const _PACKAGE = 'PACKAGE';
    const _SHIPMENT = 'SHIPMENT';
    const _SHIPMENT_FIVE_POUND_OPTIONAL = 'SHIPMENT_FIVE_POUND_OPTIONAL';
    const _SHIPMENT_OPTIONAL = 'SHIPMENT_OPTIONAL';
    const _SPECIAL = 'SPECIAL';
}