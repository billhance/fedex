<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the Express Tag Service availability.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_ReturnTagService_ExpressTagAvailabilityType
    extends FedEx_AbstractSimpleType
{
    const _NEXT_DAY_AVAILABLE = 'NEXT_DAY_AVAILABLE';
    const _SAME_DAY_AND_NEXT_DAY_AVAILABLE = 'SAME_DAY_AND_NEXT_DAY_AVAILABLE';
}