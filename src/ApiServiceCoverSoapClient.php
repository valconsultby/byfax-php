<?php

namespace byfax;

use byfax\model\header\UsernameToken;

use byfax\model\entity\common\FaxFile;
use byfax\model\entity\cover\FaxCover;

use byfax\model\response\common\ApiResponseObject;
use byfax\model\response\common\ApiResponseFileDownload;
use byfax\model\response\common\ApiResponse;

use byfax\model\response\cover\ApiResponseListCovers;
use byfax\model\response\cover\ApiResponseCoverUpload;

/**
 * @service ApiServiceCoverSoapClient
 */
class ApiServiceCoverSoapClient
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
		$this->_ServiceUri = $serviceUri . '/soap/1.1/cover';

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
                    'FaxFile'	=> FaxFile::class,
                    'FaxCover'	=> FaxCover::class,

					'ApiResponse'				=> ApiResponse::class,
                    'ApiResponseObject'			=> ApiResponseObject::class,
                    'ApiResponseFileDownload'	=> ApiResponseFileDownload::class,
                    'ApiResponseListCovers'		=> ApiResponseListCovers::class,
					'ApiResponseCoverUpload'	=> ApiResponseCoverUpload::class,
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
	 * Upload new cover-page to storage
	 *
	 * @param string $title Cover title
	 * @param FaxFile $file Cover file object
     * @return ApiResponseCoverUpload Object reference response
	 */
	public function addCover($title,$file){
		return $this->_Call('addCover',Array(
			$title,
			$file
		));
	}

	/**
	 * Download existing cover-page file from storage
	 *
	 * @param string $coverRef Cover file refID (generated externally and locked to API account)
	 * @return ApiResponseFileDownload File download response object
	 */
	public function downloadCover($coverRef){
		return $this->_Call('downloadCover',Array(
			$coverRef
		));
	}

	/**
     * Get existing cover-page details
     *
     * @param string $coverRef Cover file refID (generated externally and locked to API account)
     * @return ApiResponseListCovers ListCovers response object
     */
	public function getCover($coverRef){
		return $this->_Call('getCover',Array(
			$coverRef
		));
	}

	/**
     * List available cover-pages in storage
     *
     * @return ApiResponseListCovers ListCovers response object
     */
	public function listCovers(){
		return $this->_Call('listCovers',Array(
		));
	}

	/**
	 * Rename existing cover-page in storage (rename title)
	 *
	 * @param string $coverRef Cover file refID (generated externally and locked to API account)
	 * @param string $title New cover-page title
	 * @return ApiResponse Simple response object
	 */
	public function renameCover($coverRef,$title){
		return $this->_Call('renameCover',Array(
			$coverRef,
			$title
		));
	}

	/**
	 * Rename existing cover-page in storage (rename title)
	 *
	 * @param string $coverRef Cover file refID (generated externally and locked to API account)
	 * @param FaxFile $file Cover file object
	 * @return ApiResponse Simple response object
	 */
	public function reloadCover($coverRef,$file){
		return $this->_Call('reloadCover',Array(
			$coverRef,
			$file
		));
	}

	/**
	 * Delete cover-page from storage
	 *
	 * @param string $coverRef Cover file refID (generated externally and locked to API account)
	 * @return ApiResponse Simple response object
	 */
	public function deleteCover($coverRef){
		return $this->_Call('deleteCover',Array(
			$coverRef
		));
	}

	/**
	 * Download Cover-page preview
	 *
	 * @param string $coverRef Cover refID (generated externally and locked to API account)
	 * @return ApiResponseFileDownload FileDownload response object
	 */
	public function getCoverPreview($coverRef){
		return $this->_Call('getCoverPreview',Array(
			$coverRef
		));
	}
}
