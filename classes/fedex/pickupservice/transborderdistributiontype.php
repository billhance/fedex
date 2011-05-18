<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_PickupService_TransborderDistributionType
    extends FedEx_AbstractSimpleType
{
    const _INTERNATIONAL_GROUND = 'INTERNATIONAL_GROUND';
    const _INTERNATIONAL_GROUND_DIRECT = 'INTERNATIONAL_GROUND_DIRECT';
    const _TRANSBORDER = 'TRANSBORDER';
}