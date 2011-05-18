<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the collection of units of measure that can be associated with a weight value.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_PickupService_WeightUnits
    extends FedEx_AbstractSimpleType
{
    const _KG = 'KG';
    const _LB = 'LB';
}