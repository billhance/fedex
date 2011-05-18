<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifies how the recipient is identified for customs purposes; the requirements on this information vary with destination country.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_RecipientCustomsId
    extends FedEx_AbstractComplexType
{

    /**
     * Specifies the kind of identification being used.
     *
     * @param RecipientCustomsIdType $Type
     * return FedEx_ShipService_RecipientCustomsId
     */
    public function setType(FedEx_ShipService_RecipientCustomsIdType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Contains the actual ID value, of the type specified above.
     *
     * @param string $Value
     * return FedEx_ShipService_RecipientCustomsId
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}