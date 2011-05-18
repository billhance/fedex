<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Used to indicate whether the Destination Control Statement is of type Department of Commerce, Department of State or both.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_DestinationControlStatementType
    extends FedEx_AbstractSimpleType
{
    const _DEPARTMENT_OF_COMMERCE = 'DEPARTMENT_OF_COMMERCE';
    const _DEPARTMENT_OF_STATE = 'DEPARTMENT_OF_STATE';
}