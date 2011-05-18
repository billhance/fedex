<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_AddressValidationService_ResidentialStatusType
    extends FedEx_AbstractSimpleType
{
    const _UNDETERMINED = 'UNDETERMINED';
    const _BUSINESS = 'BUSINESS';
    const _RESIDENTIAL = 'RESIDENTIAL';
    const _INSUFFICIENT_DATA = 'INSUFFICIENT_DATA';
    const _UNAVAILABLE = 'UNAVAILABLE';
    const _NOT_APPLICABLE_TO_COUNTRY = 'NOT_APPLICABLE_TO_COUNTRY';
}