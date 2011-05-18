<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifies additional labels to be produced. All required labels for shipments will be produced without the need to request additional labels. These are only available as thermal labels.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_AdditionalLabelsDetail
    extends FedEx_AbstractComplexType
{

    /**
     * The type of additional labels to return.
     *
     * @param AdditionalLabelsType $Type
     * return FedEx_ShipService_AdditionalLabelsDetail
     */
    public function setType(FedEx_ShipService_AdditionalLabelsType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * The number of this type label to return
     *
     * @param nonNegativeInteger $Count
     * return FedEx_ShipService_AdditionalLabelsDetail
     */
    public function setCount($count)
    {
        $this->Count = $count;
        return $this;
    }
    

    
}