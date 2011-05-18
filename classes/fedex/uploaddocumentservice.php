<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_UploadDocumentService extends FedEx
{
    /**
     * Upload Document Service
     * Version 1.1.0
     */
	protected $_WSDL = array(
		'wsdl' => 'UploadDocumentService_v1.wsdl',
		'serviceId' => 'cdus',
		'major' => '1',
		'intermediate' => '1',
		'minor' => '0',
		'location' => '/web-services/uploaddocument',
	);

    /**
     * Sends request and returns Upload Documents Reply
     *
     * @param UploadDocumentsRequest $uploadDocumentsRequest
     * @return stdClass
     */
    public function getUploadDocumentsReply(FedEx_UploadDocumentService_UploadDocumentsRequest $uploadDocumentsRequest)
    {
		$uploadDocumentsRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$uploadDocumentsRequest->setClientDetail($this->_ClientDetail);
		$uploadDocumentsRequest->setVersion($this->_Version);

        return $this->_soapClient->uploadDocuments($uploadDocumentsRequest->toArray());
    }

    /**
     * Sends request and returns Upload Images Reply
     *
     * @param UploadImagesRequest $uploadImagesRequest
     * @return stdClass
     */
    public function getUploadImagesReply(FedEx_UploadDocumentService_UploadImagesRequest $uploadImagesRequest)
    {
		$uploadImagesRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$uploadImagesRequest->setClientDetail($this->_ClientDetail);
		$uploadImagesRequest->setVersion($this->_Version);

        return $this->_soapClient->uploadImages($uploadImagesRequest->toArray());
    }

}
