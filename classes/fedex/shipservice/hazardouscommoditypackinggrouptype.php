<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies DOT packing group for a hazardous commodity.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_ShipService_HazardousCommodityPackingGroupType
    extends FedEx_AbstractSimpleType
{
    const _I = 'I';
    const _II = 'II';
    const _III = 'III';
}