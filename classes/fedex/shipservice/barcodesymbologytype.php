<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identification of the type of barcode (symbology) used on FedEx documents and labels.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_ShipService_BarcodeSymbologyType
    extends FedEx_AbstractSimpleType
{
    const _CODE128B = 'CODE128B';
    const _CODE128C = 'CODE128C';
    const _CODE39 = 'CODE39';
}