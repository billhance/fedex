<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The attribute of the shipment that caused the delay(e.g. Country, City, LocationId, Zip, service area, special handling )
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_DelayLevelType
    extends FedEx_AbstractSimpleType
{
    const _CITY = 'CITY';
    const _COUNTRY = 'COUNTRY';
    const _LOCATION = 'LOCATION';
    const _POSTAL_CODE = 'POSTAL_CODE';
    const _SERVICE_AREA = 'SERVICE_AREA';
    const _SERVICE_AREA_SPECIAL_SERVICE = 'SERVICE_AREA_SPECIAL_SERVICE';
    const _SPECIAL_SERVICE = 'SPECIAL_SERVICE';
}