<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_NaftaProducerSpecificationType
    extends FedEx_AbstractSimpleType
{
    const _AVAILABLE_UPON_REQUEST = 'AVAILABLE_UPON_REQUEST';
    const _MULTIPLE_SPECIFIED = 'MULTIPLE_SPECIFIED';
    const _SAME = 'SAME';
    const _SINGLE_SPECIFIED = 'SINGLE_SPECIFIED';
    const _UNKNOWN = 'UNKNOWN';
}