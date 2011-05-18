<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
            Specifies the client-requested response in the event of errors within shipment.
            PACKAGE_ERROR_LABELS : Return per-package error label in addition to error Notifications.
            STANDARD             : Return error Notifications only.
          
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_ShipService_ErrorLabelBehaviorType
    extends FedEx_AbstractSimpleType
{
    const _PACKAGE_ERROR_LABELS = 'PACKAGE_ERROR_LABELS';
    const _STANDARD = 'STANDARD';
}