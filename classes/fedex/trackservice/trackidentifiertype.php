<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The type of track to be performed.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_TrackService_TrackIdentifierType
    extends FedEx_AbstractSimpleType
{
    const _BILL_OF_LADING = 'BILL_OF_LADING';
    const _COD_RETURN_TRACKING_NUMBER = 'COD_RETURN_TRACKING_NUMBER';
    const _CUSTOMER_AUTHORIZATION_NUMBER = 'CUSTOMER_AUTHORIZATION_NUMBER';
    const _CUSTOMER_REFERENCE = 'CUSTOMER_REFERENCE';
    const _DEPARTMENT = 'DEPARTMENT';
    const _FREE_FORM_REFERENCE = 'FREE_FORM_REFERENCE';
    const _GROUND_INTERNATIONAL = 'GROUND_INTERNATIONAL';
    const _GROUND_SHIPMENT_ID = 'GROUND_SHIPMENT_ID';
    const _GROUND_MPS = 'GROUND_MPS';
    const _INVOICE = 'INVOICE';
    const _PARTNER_CARRIER_NUMBER = 'PARTNER_CARRIER_NUMBER';
    const _PART_NUMBER = 'PART_NUMBER';
    const _PURCHASE_ORDER = 'PURCHASE_ORDER';
    const _RETURNED_TO_SHIPPER_TRACKING_NUMBER = 'RETURNED_TO_SHIPPER_TRACKING_NUMBER';
    const _RETURN_MATERIALS_AUTHORIZATION = 'RETURN_MATERIALS_AUTHORIZATION';
    const _TRACKING_NUMBER_OR_DOORTAG = 'TRACKING_NUMBER_OR_DOORTAG';
    const _TRANSPORTATION_CONTROL_NUMBER = 'TRANSPORTATION_CONTROL_NUMBER';
    const _SHIPPER_REFERENCE = 'SHIPPER_REFERENCE';
    const _STANDARD_MPS = 'STANDARD_MPS';
}