<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the valid set of tractor tailer sizes supported by FedEx. This type is appropriate only for freight pickup requests.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_PickupService_TrailerSizeType
    extends FedEx_AbstractSimpleType
{
    const _TRAILER_28_FT = 'TRAILER_28_FT';
    const _TRAILER_48_FT = 'TRAILER_48_FT';
    const _TRAILER_53_FT = 'TRAILER_53_FT';
}