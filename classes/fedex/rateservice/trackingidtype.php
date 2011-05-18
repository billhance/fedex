<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_TrackingIdType
    extends FedEx_AbstractSimpleType
{
    const _EXPRESS = 'EXPRESS';
    const _GROUND = 'GROUND';
    const _USPS = 'USPS';
}