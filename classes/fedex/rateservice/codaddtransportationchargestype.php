<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies what freight charges should be added to the COD collect amount.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_CodAddTransportationChargesType
    extends FedEx_AbstractSimpleType
{
    const _ADD_ACCOUNT_COD_SURCHARGE = 'ADD_ACCOUNT_COD_SURCHARGE';
    const _ADD_ACCOUNT_NET_CHARGE = 'ADD_ACCOUNT_NET_CHARGE';
    const _ADD_ACCOUNT_NET_FREIGHT = 'ADD_ACCOUNT_NET_FREIGHT';
    const _ADD_ACCOUNT_TOTAL_CUSTOMER_CHARGE = 'ADD_ACCOUNT_TOTAL_CUSTOMER_CHARGE';
    const _ADD_LIST_COD_SURCHARGE = 'ADD_LIST_COD_SURCHARGE';
    const _ADD_LIST_NET_CHARGE = 'ADD_LIST_NET_CHARGE';
    const _ADD_LIST_NET_FREIGHT = 'ADD_LIST_NET_FREIGHT';
    const _ADD_LIST_TOTAL_CUSTOMER_CHARGE = 'ADD_LIST_TOTAL_CUSTOMER_CHARGE';
    const _ADD_SUM_OF_ACCOUNT_NET_CHARGES = 'ADD_SUM_OF_ACCOUNT_NET_CHARGES';
    const _ADD_SUM_OF_ACCOUNT_NET_FREIGHT = 'ADD_SUM_OF_ACCOUNT_NET_FREIGHT';
    const _ADD_SUM_OF_LIST_NET_CHARGES = 'ADD_SUM_OF_LIST_NET_CHARGES';
    const _ADD_SUM_OF_LIST_NET_FREIGHT = 'ADD_SUM_OF_LIST_NET_FREIGHT';
}