<?php defined('SYSPATH') or die('No direct script access.');

/**
 * This indicates if the top or bottom of the label comes out of the printer first.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_LabelPrintingOrientationType
    extends FedEx_AbstractSimpleType
{
    const _BOTTOM_EDGE_OF_TEXT_FIRST = 'BOTTOM_EDGE_OF_TEXT_FIRST';
    const _TOP_EDGE_OF_TEXT_FIRST = 'TOP_EDGE_OF_TEXT_FIRST';
}