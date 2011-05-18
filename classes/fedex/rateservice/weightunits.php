<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the unit of measure associated with a weight value. See WeightUnits for the list of valid enumerated values.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_WeightUnits
    extends FedEx_AbstractSimpleType
{
    const _KG = 'KG';
    const _LB = 'LB';
}