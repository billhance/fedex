<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The type of Redirect to Hold FedEx location.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_LocatorService_RedirectToHoldLocationType
    extends FedEx_AbstractSimpleType
{
    const _EXPRESS = 'EXPRESS';
    const _GROUND = 'GROUND';
    const _HOMEDELIVERY = 'HOMEDELIVERY';
}