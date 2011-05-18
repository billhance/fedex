<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Indicates which special rating cases applied to this shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_SpecialRatingAppliedType
    extends FedEx_AbstractSimpleType
{
    const _FIXED_FUEL_SURCHARGE = 'FIXED_FUEL_SURCHARGE';
    const _IMPORT_PRICING = 'IMPORT_PRICING';
}