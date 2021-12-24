<?php

namespace byfax;

use byfax\model\header\UsernameToken;

use byfax\model\entity\common\FaxFile;
use byfax\model\entity\common\FaxDocument;

use byfax\model\response\common\ApiResponse;
use byfax\model\response\common\ApiResponseFileUpload;
use byfax\model\response\common\ApiResponseFileDownload;
use byfax\model\response\common\ApiResponseDocPreview;

use byfax\model\response\document\ApiResponseDocUpload;

/**
 * @service ApiServiceDocumentSoapClient
 */
class ApiServiceDocumentSoapClient
{
	/**
     * The $_ServiceUri URI
     *
     * @var string
     */
	private $_ServiceUri=null;

	/**
     * The PHP SoapClient object
     *
     * @var object
     */

	private $_SOAPClient=null;

	/**
     * The PHP UsernameToken object
     *
     * @var UsernameToken
     */
	private $_HeaderUsernameToken=null;

	/**
	 * Summary of __construct
     *
	 * @param string $apiKey
     * @param string $apiSecret
     * @param string $serviceUri
	 */
	public function __construct($apiKey, $apiSecret, $serviceUri='https://sandbox.byfax.biz'){
		$this->_ServiceUri = $serviceUri . '/soap/1.1/document';

		$this->_HeaderUsernameToken = new UsernameToken();
		$this->_HeaderUsernameToken->Username = $apiKey;
		$this->_HeaderUsernameToken->Password = $apiSecret;
	}

	/**
	 * Send a SOAP request to the server
	 *
	 * @param string $method The method name
	 * @param array $param The parameters
	 * @return mixed The server response
	 */
	private function _Call($method,$param){
		if(is_null($this->_SOAPClient))
		{
			$context = stream_context_create(array(
				'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
				)
			));
			$params = array(
				'encoding'=>'utf-8',
				'exceptions'=>true,
				'stream_context' => $context,
				'classmap' => [
                    'FaxDocument'	=> FaxDocument::class,
                    'FaxFile'		=> FaxFile::class,

					'ApiResponse'				=> ApiResponse::class,
                    'ApiResponseFileDownload'	=> ApiResponseFileDownload::class,
                    'ApiResponseFileUpload'		=> ApiResponseFileUpload::class,
                    'ApiResponseDocPreview'		=> ApiResponseDocPreview::class,
					'ApiResponseDocUpload'		=> ApiResponseDocUpload::class,
				]
			);
			$this->_SOAPClient=new \SoapClient($this->_ServiceUri.'?WSDL', $params);
		}
		$headers=array();

		if($this->_HeaderUsernameToken != null){
			$headers[] = new \SoapHeader($this->_ServiceUri, 'UsernameToken', $this->_HeaderUsernameToken, false);
		}

		if(count($headers))
			$this->_SOAPClient->__setSoapHeaders($headers);

		return $this->_SOAPClient->__soapCall($method,$param);
	}

	/**
	 * Upload a new fax document to storage and push it into conversion in FINE::TEXT mode
	 *
	 * @param FaxDocument $uploadDocument FaxDocument object to store
     * @return ApiResponseDocUpload FileUpload Api response data
	 */
	public function uploadDocument($uploadDocument){
		return $this->_Call('uploadDocument',Array(
			$uploadDocument
		));
	}

	/**
	 * Download FaxDocument file binary content from storage
	 *
	 * @param string $documentRef Document refID (generated externally and locked to API account)
	 * @return ApiResponseFileDownload Api response object
	 */
	public function downloadDocument($documentRef){
		return $this->_Call('downloadDocument',Array(
			$documentRef
		));
	}

	/**
     * Download FaxDocument file binary content from storage
     *
     * @param array $documentRefs Document refIDs (generated externally and locked to API account)
     * @return ApiResponse Api response object
     */
	public function deleteDocuments($documentRefs){
		return $this->_Call('deleteDocuments',Array(
			$documentRefs
		));
	}

	/**
     * Check and obtain FaxDocument current state
     *
     * @param string $documentRef Document refID (generated externally and locked to API account)
     * @return ApiResponseDocUpload Api response object
     */
	public function checkDocument($documentRef){
		return $this->_Call('checkDocument',Array(
			$documentRef
		));
	}

	/**
	 * Download FaxDocument converted preview in request conversion and quality
	 *
	 * @param string $documentRef Document refID (generated externally and locked to API account)
     * @param string $quality Document conversion quality (FaxQuality enumeration value)
     * @param string $conversion Document conversion mode (FaxMode enumeration value)
	 * @return ApiResponseDocPreview Api response object
	 */
	public function getDocumentPreview($documentRef,$quality,$conversion){
		return $this->_Call('getDocumentPreview',Array(
			$documentRef,
			$quality,
			$conversion
		));
	}
}
