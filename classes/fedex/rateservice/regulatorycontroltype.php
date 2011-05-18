<?php defined('SYSPATH') or die('No direct script access.');

/**
 * FOOD_OR_PERISHABLE is required by FDA/BTA; must be true for food/perishable items coming to US or PR from non-US/non-PR origin
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_RegulatoryControlType
    extends FedEx_AbstractSimpleType
{
    const _EU_CIRCULATION = 'EU_CIRCULATION';
    const _FOOD_OR_PERISHABLE = 'FOOD_OR_PERISHABLE';
    const _NAFTA = 'NAFTA';
}