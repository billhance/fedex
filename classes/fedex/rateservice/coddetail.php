<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Descriptive data required for a FedEx COD (Collect-On-Delivery) shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_CodDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param Money $CodCollectionAmount
     * return FedEx_RateService_CodDetail
     */
    public function setCodCollectionAmount(FedEx_RateService_Money $codCollectionAmount)
    {
        $this->CodCollectionAmount = $codCollectionAmount;
        return $this;
    }
    
    /**
     * Identifies if freight charges are to be added to the COD amount. This element determines which freight charges should be added to the COD collect amount. See CodAddTransportationChargesType for a list of valid enumerated values.
     *
     * @param CodAddTransportationChargesType $AddTransportationCharges
     * return FedEx_RateService_CodDetail
     */
    public function setAddTransportationCharges(FedEx_RateService_CodAddTransportationChargesType $addTransportationCharges)
    {
        $this->AddTransportationCharges = $addTransportationCharges;
        return $this;
    }
    
    /**
     * Identifies the type of funds FedEx should collect upon package delivery
     *
     * @param CodCollectionType $CollectionType
     * return FedEx_RateService_CodDetail
     */
    public function setCollectionType(FedEx_RateService_CodCollectionType $collectionType)
    {
        $this->CollectionType = $collectionType;
        return $this;
    }
    
    /**
     * For Express this is the descriptive data that is used for the recipient of the FedEx Letter containing the COD payment. For Ground this is the descriptive data for the party to receive the payment that prints the COD receipt.
     *
     * @param Party $CodRecipient
     * return FedEx_RateService_CodDetail
     */
    public function setCodRecipient(FedEx_RateService_Party $codRecipient)
    {
        $this->CodRecipient = $codRecipient;
        return $this;
    }
    
    /**
     * Indicates which type of reference information to include on the COD return shipping label.
     *
     * @param CodReturnReferenceIndicatorType $ReferenceIndicator
     * return FedEx_RateService_CodDetail
     */
    public function setReferenceIndicator(FedEx_RateService_CodReturnReferenceIndicatorType $referenceIndicator)
    {
        $this->ReferenceIndicator = $referenceIndicator;
        return $this;
    }
    

    
}