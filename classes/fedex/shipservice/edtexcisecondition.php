<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_EdtExciseCondition
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param string $Category
     * return FedEx_ShipService_EdtExciseCondition
     */
    public function setCategory($category)
    {
        $this->Category = $category;
        return $this;
    }
    
    /**
     * Customer-declared value, with data type and legal values depending on excise condition, used in defining the taxable value of the item.
     *
     * @param string $Value
     * return FedEx_ShipService_EdtExciseCondition
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}