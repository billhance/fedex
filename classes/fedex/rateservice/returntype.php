<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The type of return shipment that is being requested.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_ReturnType
    extends FedEx_AbstractSimpleType
{
    const _FEDEX_TAG = 'FEDEX_TAG';
    const _PENDING = 'PENDING';
    const _PRINT_RETURN_LABEL = 'PRINT_RETURN_LABEL';
}