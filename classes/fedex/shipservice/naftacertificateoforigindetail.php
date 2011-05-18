<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Data required to produce a Certificate of Origin document. Remaining content (business data) to be defined once requirements have been completed.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_NaftaCertificateOfOriginDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param ShippingDocumentFormat $Format
     * return FedEx_ShipService_NaftaCertificateOfOriginDetail
     */
    public function setFormat(FedEx_ShipService_ShippingDocumentFormat $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * 
     *
     * @param DateRange $BlanketPeriod
     * return FedEx_ShipService_NaftaCertificateOfOriginDetail
     */
    public function setBlanketPeriod(FedEx_ShipService_DateRange $blanketPeriod)
    {
        $this->BlanketPeriod = $blanketPeriod;
        return $this;
    }
    
    /**
     * Indicates which Party (if any) from the shipment is to be used as the source of importer data on the NAFTA COO form.
     *
     * @param NaftaImporterSpecificationType $ImporterSpecification
     * return FedEx_ShipService_NaftaCertificateOfOriginDetail
     */
    public function setImporterSpecification(FedEx_ShipService_NaftaImporterSpecificationType $importerSpecification)
    {
        $this->ImporterSpecification = $importerSpecification;
        return $this;
    }
    
    /**
     * Contact information for "Authorized Signature" area of form.
     *
     * @param Contact $SignatureContact
     * return FedEx_ShipService_NaftaCertificateOfOriginDetail
     */
    public function setSignatureContact(FedEx_ShipService_Contact $signatureContact)
    {
        $this->SignatureContact = $signatureContact;
        return $this;
    }
    
    /**
     * 
     *
     * @param NaftaProducerSpecificationType $ProducerSpecification
     * return FedEx_ShipService_NaftaCertificateOfOriginDetail
     */
    public function setProducerSpecification(FedEx_ShipService_NaftaProducerSpecificationType $producerSpecification)
    {
        $this->ProducerSpecification = $producerSpecification;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[NaftaProducer] $Producers
     * return FedEx_ShipService_NaftaCertificateOfOriginDetail
     */
    public function setProducers(array $producers)
    {
        $this->Producers = $producers;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[CustomerImageUsage] $CustomerImageUsages
     * return FedEx_ShipService_NaftaCertificateOfOriginDetail
     */
    public function setCustomerImageUsages(array $customerImageUsages)
    {
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    

    
}