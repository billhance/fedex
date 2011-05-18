<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_PurposeOfShipmentType
    extends FedEx_AbstractSimpleType
{
    const _GIFT = 'GIFT';
    const _NOT_SOLD = 'NOT_SOLD';
    const _PERSONAL_EFFECTS = 'PERSONAL_EFFECTS';
    const _REPAIR_AND_RETURN = 'REPAIR_AND_RETURN';
    const _SAMPLE = 'SAMPLE';
    const _SOLD = 'SOLD';
}