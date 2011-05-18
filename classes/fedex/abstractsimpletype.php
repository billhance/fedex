<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
abstract class FedEx_AbstractSimpleType
{
    /**
     *
     * @var string
     */
    protected $_value;

    /**
     * Constructor
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->_value = $value;
    }

    /**
     * __toString() implementation
     * 
     * @return string
     */
    public function __toString()
    {
        return $this->_value;
    }
}
