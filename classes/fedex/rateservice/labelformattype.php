<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifies the type of label to be returned.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_LabelFormatType
    extends FedEx_AbstractSimpleType
{
    const _COMMON2D = 'COMMON2D';
    const _LABEL_DATA_ONLY = 'LABEL_DATA_ONLY';
    const _MAILROOM = 'MAILROOM';
    const _NO_LABEL = 'NO_LABEL';
    const _PRE_COMMON2D = 'PRE_COMMON2D';
}