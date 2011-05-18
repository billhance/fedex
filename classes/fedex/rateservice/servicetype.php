<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the FedEx service to use in shipping the package. See ServiceType for list of valid enumerated values.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_ServiceType
    extends FedEx_AbstractSimpleType
{
    const _EUROPE_FIRST_INTERNATIONAL_PRIORITY = 'EUROPE_FIRST_INTERNATIONAL_PRIORITY';
    const _FEDEX_1_DAY_FREIGHT = 'FEDEX_1_DAY_FREIGHT';
    const _FEDEX_2_DAY = 'FEDEX_2_DAY';
    const _FEDEX_2_DAY_FREIGHT = 'FEDEX_2_DAY_FREIGHT';
    const _FEDEX_3_DAY_FREIGHT = 'FEDEX_3_DAY_FREIGHT';
    const _FEDEX_EXPRESS_SAVER = 'FEDEX_EXPRESS_SAVER';
    const _FEDEX_FREIGHT = 'FEDEX_FREIGHT';
    const _FEDEX_GROUND = 'FEDEX_GROUND';
    const _FEDEX_NATIONAL_FREIGHT = 'FEDEX_NATIONAL_FREIGHT';
    const _FIRST_OVERNIGHT = 'FIRST_OVERNIGHT';
    const _GROUND_HOME_DELIVERY = 'GROUND_HOME_DELIVERY';
    const _INTERNATIONAL_ECONOMY = 'INTERNATIONAL_ECONOMY';
    const _INTERNATIONAL_ECONOMY_FREIGHT = 'INTERNATIONAL_ECONOMY_FREIGHT';
    const _INTERNATIONAL_FIRST = 'INTERNATIONAL_FIRST';
    const _INTERNATIONAL_GROUND = 'INTERNATIONAL_GROUND';
    const _INTERNATIONAL_PRIORITY = 'INTERNATIONAL_PRIORITY';
    const _INTERNATIONAL_PRIORITY_FREIGHT = 'INTERNATIONAL_PRIORITY_FREIGHT';
    const _PRIORITY_OVERNIGHT = 'PRIORITY_OVERNIGHT';
    const _SMART_POST = 'SMART_POST';
    const _STANDARD_OVERNIGHT = 'STANDARD_OVERNIGHT';
}