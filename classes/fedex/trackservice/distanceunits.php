<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the collection of units of measure that can be associated with a distance value.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_TrackService_DistanceUnits
    extends FedEx_AbstractSimpleType
{
    const _KM = 'KM';
    const _MI = 'MI';
}