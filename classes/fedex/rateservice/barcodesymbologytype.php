<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identification of the type of barcode (symbology) used on FedEx documents and labels.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_BarcodeSymbologyType
    extends FedEx_AbstractSimpleType
{
    const _CODABAR = 'CODABAR';
    const _CODE128 = 'CODE128';
    const _CODE128B = 'CODE128B';
    const _CODE128C = 'CODE128C';
    const _CODE39 = 'CODE39';
    const _CODE93 = 'CODE93';
    const _I2OF5 = 'I2OF5';
    const _MANUAL = 'MANUAL';
    const _PDF417 = 'PDF417';
    const _POSTNET = 'POSTNET';
    const _UCC128 = 'UCC128';
}