<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_ShipService extends FedEx
{
    /**
     * Ship Service
     * Version 9.0.0
     */
	protected $_WSDL = array(
		'wsdl' => 'ShipService_v9.wsdl',
		'serviceId' => 'ship',
		'major' => '9',
		'intermediate' => '0',
		'minor' => '0',
		'location' => '/web-services/ship',
	);

    /**
     * Sends request and returns Process Shipment Reply
     *
     * @param ProcessShipmentRequest $processShipmentRequest
     * @return stdClass
     */
    public function getProcessShipmentReply(FedEx_ShipService_ProcessShipmentRequest $processShipmentRequest)
    {
		$processShipmentRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$processShipmentRequest->setClientDetail($this->_ClientDetail);
		$processShipmentRequest->setVersion($this->_Version);

        return $this->_soapClient->processShipment($processShipmentRequest->toArray());
    }

    /**
     * Sends request and returns Delete Shipment Reply
     *
     * @param DeleteShipmentRequest $deleteShipmentRequest
     * @return stdClass
     */
    public function getDeleteShipmentReply(FedEx_ShipService_DeleteShipmentRequest $deleteShipmentRequest)
    {
		$deleteShipmentRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$deleteShipmentRequest->setClientDetail($this->_ClientDetail);
		$deleteShipmentRequest->setVersion($this->_Version);

        return $this->_soapClient->deleteShipment($deleteShipmentRequest->toArray());
    }

    /**
     * Sends request and returns Validate Shipment Reply
     *
     * @param ValidateShipmentRequest $validateShipmentRequest
     * @return stdClass
     */
    public function getValidateShipmentReply(FedEx_ShipService_ValidateShipmentRequest $validateShipmentRequest)
    {
		$validateShipmentRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$validateShipmentRequest->setClientDetail($this->_ClientDetail);
		$validateShipmentRequest->setVersion($this->_Version);

        return $this->_soapClient->validateShipment($validateShipmentRequest->toArray());
    }

    /**
     * Sends request and returns Create Pending Shipment Reply
     *
     * @param CreatePendingShipmentRequest $createPendingShipmentRequest
     * @return stdClass
     */
    public function getCreatePendingShipmentReply(FedEx_ShipService_CreatePendingShipmentRequest $createPendingShipmentRequest)
    {
		$createPendingShipmentRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$createPendingShipmentRequest->setClientDetail($this->_ClientDetail);
		$createPendingShipmentRequest->setVersion($this->_Version);

        return $this->_soapClient->createPendingShipment($createPendingShipmentRequest->toArray());
    }

    /**
     * Sends request and returns Cancel Pending Shipment Reply
     *
     * @param CancelPendingShipmentRequest $cancelPendingShipmentRequest
     * @return stdClass
     */
    public function getCancelPendingShipmentReply(FedEx_ShipService_CancelPendingShipmentRequest $cancelPendingShipmentRequest)
    {
		$cancelPendingShipmentRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$cancelPendingShipmentRequest->setClientDetail($this->_ClientDetail);
		$cancelPendingShipmentRequest->setVersion($this->_Version);

        return $this->_soapClient->cancelPendingShipment($cancelPendingShipmentRequest->toArray());
    }

    /**
     * Sends request and returns Process Tag Reply
     *
     * @param ProcessTagRequest $processTagRequest
     * @return stdClass
     */
    public function getProcessTagReply(FedEx_ShipService_ProcessTagRequest $processTagRequest)
    {
		$processTagRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$processTagRequest->setClientDetail($this->_ClientDetail);
		$processTagRequest->setVersion($this->_Version);

        return $this->_soapClient->processTag($processTagRequest->toArray());
    }

    /**
     * Sends request and returns Delete Tag Shipment Reply
     *
     * @param DeleteTagRequest $deleteTagRequet
     * @return stdClass
     */
    public function getDeleteTagShipmentReply(FedEx_ShipService_DeleteTagRequest $deleteTagRequet)
    {
		$deleteTagRequet->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$deleteTagRequet->setClientDetail($this->_ClientDetail);
		$deleteTagRequet->setVersion($this->_Version);

        return $this->_soapClient->deleteTag($deleteTagRequet->toArray());
    }
}
