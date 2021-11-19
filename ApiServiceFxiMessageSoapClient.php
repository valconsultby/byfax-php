<?php

namespace byfax;

use byfax\model\header\UsernameToken;

use byfax\model\entity\common\FaxFile;
use byfax\model\entity\common\FaxContact;
use byfax\model\entity\common\ListPagination;
use byfax\model\entity\faxin\FaxinMessage;

use byfax\model\request\faxin\ApiRequestCountFaxes;
use byfax\model\request\faxin\ApiRequestListFaxes;

use byfax\model\response\common\ApiResponse;
use byfax\model\response\common\ApiResponseDocPreview;
use byfax\model\response\common\ApiResponseItemsCount;
use byfax\model\response\common\ApiResponseObject;
use byfax\model\response\common\ApiResponseFileDownload;

use byfax\model\response\faxin\ApiResponseListFaxes;

/**
 * @service ApiServiceFxiMessageSoapClient
 */
class ApiServiceFxiMessageSoapClient
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
		$this->_ServiceUri = $serviceUri . '/soap/1.1/faxin/message';

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
	public function _Call($method,$param){
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
                    'FaxFile' => FaxFile::class,
                    'FaxContact' => FaxContact::class,
                    'ListPagination' => ListPagination::class,
                    'FaxinMessage' => FaxinMessage::class,

                    'ApiRequestCountFaxes' => ApiRequestCountFaxes::class,
                    'ApiRequestListFaxes' => ApiRequestListFaxes::class,

                    'ApiResponseObject' => ApiResponseObject::class,
                    'ApiResponseItemsCount' => ApiResponseItemsCount::class,
                    'ApiResponseFileDownload' => ApiResponseFileDownload::class,
                    'ApiResponseDocPreview' => ApiResponseDocPreview::class,
                    'ApiResponseListFaxes' => ApiResponseListFaxes::class,
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
	 * Summary of countFaxes
	 *
	 * @param ApiRequestCountFaxes $listRequest List faxes request
	 * @return ApiResponseItemsCount Api response object
	 */
	public function countFaxes($listRequest){
		return $this->_Call('countFaxes',Array(
			$listRequest
		));
	}

	/**
	 * Summary of listFaxes
	 *
	 * @param ApiRequestListFaxes $listRequest List faxes request
	 * @return ApiResponseListFaxes Api response object
	 */
	public function listFaxes($listRequest){
		return $this->_Call('listFaxes',Array(
			$listRequest
		));
	}

	/**
	 * Fax File download request handler
	 *
	 * @param string $messageRef Fax message UUID (attached to API account)
	 * @param boolean $isPDF Download fax file in PDF (true) or native TIFF (false) format
	 * @return ApiResponseDocPreview Api response object
	 */
	public function downloadFax($messageRef,$isPDF){
		return $this->_Call('downloadFax',Array(
			$messageRef,
			$isPDF
		));
	}

	/**
	 * Fax delete request handler
	 *
	 * @param string $messageRef Fax message UUID (attached to API account)
	 * @return ApiResponse Api response object
	 */
	public function deleteFax($messageRef){
		return $this->_Call('deleteFax',Array(
			$messageRef
		));
	}
}
