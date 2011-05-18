<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
abstract class FedEx_AbstractComplexType {

    /**
     * Holds the data as a key => value array
     * 
     * @var array
     */
    protected $_values = array();

    /**
     * Constructor
     *
     * @param array $options Data as key => value array
     */
    public function __construct(array $options = null) {
        if (is_array($options)) {
            foreach ($options as $name => $value) {
                $this->$name = $value;
            }
        }
    }

    /**
     * __set implementation
     *
     * @param string $name
     * @param string $value
     */
    public function __set($name, $value) {
        $this->_values[$name] = $value;
    }

    /**
     * Recursive algorthim to convert complex types to and array
     *
     * @param array $arrayValues
     * @return array
     */
    protected function _convertToArray($arrayValues) {
        $returnArray = array();

        foreach ($arrayValues as $key => $value) {

            if ($value instanceof self) {
                $returnArray[$key] = $value->toArray();
            } else if (is_array($value)) {
                $returnArray[$key] = $this->_convertToArray($value);
            } else {
                if ($value instanceof FedEx_AbstractSimpleType) {
                    $returnArray[$key] = (string) $value;
                } else {
                    $returnArray[$key] = $value;
                }
            }
        }

        return $returnArray;
    }

    /**
     * Returns the complex type as an array
     * 
     * @return array
     */
    public function toArray() {
        $returnArray = $this->_convertToArray($this->_values);

        return $returnArray;
    }
}
