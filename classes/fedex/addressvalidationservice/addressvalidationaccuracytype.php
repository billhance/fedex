<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_AddressValidationService_AddressValidationAccuracyType
    extends FedEx_AbstractSimpleType
{
    const _EXACT = 'EXACT';
    const _TIGHT = 'TIGHT';
    const _MEDIUM = 'MEDIUM';
    const _LOOSE = 'LOOSE';
}