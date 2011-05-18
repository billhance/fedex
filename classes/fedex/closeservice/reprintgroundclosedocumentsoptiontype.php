<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the requested options to reprinting Ground Close Documents
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_CloseService_ReprintGroundCloseDocumentsOptionType
    extends FedEx_AbstractSimpleType
{
    const _BY_SHIP_DATE = 'BY_SHIP_DATE';
    const _BY_TRACKING_NUMBER = 'BY_TRACKING_NUMBER';
}