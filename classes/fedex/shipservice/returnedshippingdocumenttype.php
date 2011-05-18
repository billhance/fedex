<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Shipping document type.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_ShipService_ReturnedShippingDocumentType
    extends FedEx_AbstractSimpleType
{
    const _AUXILIARY_LABEL = 'AUXILIARY_LABEL';
    const _CERTIFICATE_OF_ORIGIN = 'CERTIFICATE_OF_ORIGIN';
    const _COD_RETURN_2_D_BARCODE = 'COD_RETURN_2_D_BARCODE';
    const _COD_RETURN_LABEL = 'COD_RETURN_LABEL';
    const _COMMERCIAL_INVOICE = 'COMMERCIAL_INVOICE';
    const _CUSTOM_PACKAGE_DOCUMENT = 'CUSTOM_PACKAGE_DOCUMENT';
    const _CUSTOM_SHIPMENT_DOCUMENT = 'CUSTOM_SHIPMENT_DOCUMENT';
    const _ETD_LABEL = 'ETD_LABEL';
    const _FREIGHT_ADDRESS_LABEL = 'FREIGHT_ADDRESS_LABEL';
    const _GENERAL_AGENCY_AGREEMENT = 'GENERAL_AGENCY_AGREEMENT';
    const _GROUND_BARCODE = 'GROUND_BARCODE';
    const _NAFTA_CERTIFICATE_OF_ORIGIN = 'NAFTA_CERTIFICATE_OF_ORIGIN';
    const _OP_900 = 'OP_900';
    const _OUTBOUND_2_D_BARCODE = 'OUTBOUND_2_D_BARCODE';
    const _OUTBOUND_LABEL = 'OUTBOUND_LABEL';
    const _PRO_FORMA_INVOICE = 'PRO_FORMA_INVOICE';
    const _RECIPIENT_ADDRESS_BARCODE = 'RECIPIENT_ADDRESS_BARCODE';
    const _RECIPIENT_POSTAL_BARCODE = 'RECIPIENT_POSTAL_BARCODE';
    const _RETURN_INSTRUCTIONS = 'RETURN_INSTRUCTIONS';
    const _TERMS_AND_CONDITIONS = 'TERMS_AND_CONDITIONS';
    const _USPS_BARCODE = 'USPS_BARCODE';
}