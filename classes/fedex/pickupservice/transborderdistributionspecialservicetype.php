<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies features of service requested for a Transborder Distribution shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_PickupService_TransborderDistributionSpecialServiceType
    extends FedEx_AbstractSimpleType
{
    const _FEDEX_LTL = 'FEDEX_LTL';
}