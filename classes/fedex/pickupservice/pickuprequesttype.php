<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Describes the relationship between the date on which a dispatch occurs and the date on which it is created (scheduled)
						by means of a CourierDispatchRequest. FUTURE_DAY means that the dispatch date is later than the date on which it is created.
						SAME_DAY means that the dispatch is to occur on the date on which it is created.
					
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_PickupService_PickupRequestType
    extends FedEx_AbstractSimpleType
{
    const _FUTURE_DAY = 'FUTURE_DAY';
    const _SAME_DAY = 'SAME_DAY';
}