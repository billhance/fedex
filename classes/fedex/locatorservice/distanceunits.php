<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the set of distance units for a Distance.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_LocatorService_DistanceUnits
    extends FedEx_AbstractSimpleType
{
    const _KM = 'KM';
    const _MI = 'MI';
}