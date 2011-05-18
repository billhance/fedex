<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_SmartPostIndiciaType
    extends FedEx_AbstractSimpleType
{
    const _MEDIA_MAIL = 'MEDIA_MAIL';
    const _PARCEL_RETURN = 'PARCEL_RETURN';
    const _PARCEL_SELECT = 'PARCEL_SELECT';
    const _PRESORTED_BOUND_PRINTED_MATTER = 'PRESORTED_BOUND_PRINTED_MATTER';
    const _PRESORTED_STANDARD = 'PRESORTED_STANDARD';
}