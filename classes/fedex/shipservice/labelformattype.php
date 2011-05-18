<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifies the type of label to be returned.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_ShipService_LabelFormatType
    extends FedEx_AbstractSimpleType
{
    const _COMMON2D = 'COMMON2D';
    const _FEDEX_FREIGHT_STRAIGHT_BILL_OF_LADING = 'FEDEX_FREIGHT_STRAIGHT_BILL_OF_LADING';
    const _LABEL_DATA_ONLY = 'LABEL_DATA_ONLY';
    const _VICS_BILL_OF_LADING = 'VICS_BILL_OF_LADING';
}