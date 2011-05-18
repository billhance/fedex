<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Time in transit from pickup to delivery.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_TransitTimeType
    extends FedEx_AbstractSimpleType
{
    const _ONE_DAY = 'ONE_DAY';
    const _TWO_DAYS = 'TWO_DAYS';
    const _THREE_DAYS = 'THREE_DAYS';
    const _FOUR_DAYS = 'FOUR_DAYS';
    const _FIVE_DAYS = 'FIVE_DAYS';
    const _SIX_DAYS = 'SIX_DAYS';
    const _SEVEN_DAYS = 'SEVEN_DAYS';
    const _EIGHT_DAYS = 'EIGHT_DAYS';
    const _NINE_DAYS = 'NINE_DAYS';
    const _TEN_DAYS = 'TEN_DAYS';
    const _ELEVEN_DAYS = 'ELEVEN_DAYS';
    const _TWELVE_DAYS = 'TWELVE_DAYS';
    const _THIRTEEN_DAYS = 'THIRTEEN_DAYS';
    const _FOURTEEN_DAYS = 'FOURTEEN_DAYS';
    const _FIFTEEN_DAYS = 'FIFTEEN_DAYS';
    const _SIXTEEN_DAYS = 'SIXTEEN_DAYS';
    const _SEVENTEEN_DAYS = 'SEVENTEEN_DAYS';
    const _EIGHTEEN_DAYS = 'EIGHTEEN_DAYS';
    const _NINETEEN_DAYS = 'NINETEEN_DAYS';
    const _TWENTY_DAYS = 'TWENTY_DAYS';
    const _UNKNOWN = 'UNKNOWN';
}