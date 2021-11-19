<?php

namespace byfax;

use byfax\model\header\UsernameToken;

use byfax\model\entity\common\ListPagination;
use byfax\model\entity\common\FaxDocument;
use byfax\model\entity\common\FaxGreeting;
use byfax\model\entity\common\FaxFile;
use byfax\model\entity\common\FaxRecipient;
use byfax\model\entity\common\FaxContact;

use byfax\model\entity\faxout\FaxReportProcess;
use byfax\model\entity\faxout\FaxReportMessage;
use byfax\model\entity\faxout\FaxReportBroadcast;
use byfax\model\entity\faxout\FaxReportRecipient;
use byfax\model\entity\faxout\FaxReportUpload;

use byfax\model\request\faxout\ApiRequestFaxjobSubmit;
use byfax\model\request\faxout\ApiRequestFaxjobMessage;
use byfax\model\request\faxout\ApiRequestFaxjobProcess;
use byfax\model\request\faxout\ApiRequestFaxjobCountBroadcasts;
use byfax\model\request\faxout\ApiRequestFaxjobListBroadcasts;
use byfax\model\request\faxout\ApiRequestFaxjobCountMessages;
use byfax\model\request\faxout\ApiRequestFaxjobListMessages;

use byfax\model\response\common\ApiResponse;
use byfax\model\response\common\ApiResponseBalance;
use byfax\model\response\common\ApiResponseDocPreview;
use byfax\model\response\common\ApiResponseItemsCount;

use byfax\model\response\faxout\ApiResponseFaxjobSubmit;
use byfax\model\response\faxout\ApiResponseFaxjobProcess;
use byfax\model\response\faxout\ApiResponseFaxjobBroadcasts;
use byfax\model\response\faxout\ApiResponseFaxjobMessages;
use byfax\model\response\common\ApiResponseFileDownload;

/**
 * @service ApiServiceFaxoutSoapClient
 */
class ApiServiceFaxoutSoapClient
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
		$this->_ServiceUri = $serviceUri . '/soap/1.1/faxout';

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
                    'FaxContact'                    => FaxContact::class,
                    'FaxRecipient'                  => FaxRecipient::class,
                    'FaxFile'                       => FaxFile::class,
                    'FaxGreeting'                   => FaxGreeting::class,
                    'FaxDocument'                   => FaxDocument::class,
                    'FaxReportUpload'               => FaxReportUpload::class,
                    'FaxReportRecipient'            => FaxReportRecipient::class,
                    'FaxReportBroadcast'            => FaxReportBroadcast::class,
                    'FaxReportMessage'              => FaxReportMessage::class,
                    'FaxReportProcess'              => FaxReportProcess::class,
                    'ListPagination'                => ListPagination::class,

                    'ApiRequestFaxjobProcess'       => ApiRequestFaxjobProcess::class,
                    'ApiRequestFaxjobSubmit'        => ApiRequestFaxjobSubmit::class,
                    'ApiRequestFaxjobMessage'       => ApiRequestFaxjobMessage::class,

                    'ApiRequestFaxjobCountBroadcasts'   => ApiRequestFaxjobCountBroadcasts::class,
                    'ApiRequestFaxjobCountMessages'     => ApiRequestFaxjobCountMessages::class,
                    'ApiRequestFaxjobListBroadcasts'    => ApiRequestFaxjobListBroadcasts::class,
                    'ApiRequestFaxjobListMessages'      => ApiRequestFaxjobListMessages::class,

                    'ApiResponse'					=> ApiResponse::class,
					'ApiResponseBalance'			=> ApiResponseBalance::class,
                    'ApiResponseItemsCount'         => ApiResponseItemsCount::class,
                    'ApiResponseFileDownload'       => ApiResponseFileDownload::class,
                    'ApiResponseDocPreview'         => ApiResponseDocPreview::class,
                    'ApiResponseFaxjobSubmit'       => ApiResponseFaxjobSubmit::class,
                    'ApiResponseFaxjobProcess'      => ApiResponseFaxjobProcess::class,
                    'ApiResponseFaxjobBroadcasts'   => ApiResponseFaxjobBroadcasts::class,
                    'ApiResponseFaxjobMessages'     => ApiResponseFaxjobMessages::class,
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
	 * Common fax submission request (single or multiple files, single or multiple recipients)
	 *
	 * @param ApiRequestFaxjobSubmit $submitRequest Fax submission request
	 * @return ApiResponseFaxjobSubmit FaxjobSubmit Api response object
	 */
	public function Submit($submitRequest){
		return $this->_Call('Submit',Array(
			$submitRequest
		));
	}

	/**
	 * TIFF message fax submission request handler (only single TIFF file and only single recipient)
	 *
	 * @param ApiRequestFaxjobMessage $submitRequest Fax TIFF submission request
	 * @return ApiResponseFaxjobSubmit FaxjobSubmit Api response object
	 */
	public function SubmitMessage($submitRequest){
		return $this->_Call('SubmitMessage',Array(
			$submitRequest
		));
	}

	/**
	 * Fax broadcast or recipient resubmit request
	 *
	 * @param ApiRequestFaxjobProcess $resubmitRequest Fax resubmit request data
	 * @return ApiResponseFaxjobProcess FaxjobProcess Api response object
	 */
	public function Resubmit($resubmitRequest){
		return $this->_Call('Resubmit',Array(
			$resubmitRequest
		));
	}

	/**
	 * Fax broadcast or recipient pause request
	 *
	 * @param ApiRequestFaxjobProcess $pauseRequest Fax pause request data
	 * @return ApiResponseFaxjobProcess FaxjobProcess Api response object
	 */
	public function Pause($pauseRequest){
		return $this->_Call('Pause',Array(
			$pauseRequest
		));
	}

	/**
	 * Fax broadcast or recipient resume request
	 *
     * @param ApiRequestFaxjobProcess $resumeRequest Fax resume request data
	 * @return ApiResponseFaxjobProcess FaxjobProcess Api response object
	 */
	public function Resume($resumeRequest){
		return $this->_Call('Resume',Array(
			$resumeRequest
		));
	}

	/**
	 * Fax broadcast or recipient cancel request
	 *
     * @param ApiRequestFaxjobProcess $cancelRequest Fax cancel request data
	 * @return ApiResponseFaxjobProcess FaxjobProcess Api response object
	 */
	public function Cancel($cancelRequest){
		return $this->_Call('Cancel',Array(
			$cancelRequest
		));
	}

	/**
	 * Download fax file in PDF or TIFF format
	 *
	 * @param string $messageRef Recipient refID to get TIFF/PDF file for
	 * @param boolean $isPdf Obtain file in PDF (true) or Tiff (false) format
	 * @return ApiResponseDocPreview DocPreview Api response object
	 */
	public function Download($messageRef,$isPdf){
		return $this->_Call('Download',Array(
			$messageRef,
			$isPdf
		));
	}

	/**
	 * Delete fax container (the entire fax broadcast)
	 *
	 * @param string $messageRef Container refID to delete
	 * @return ApiResponse Simple Api response object
	 */
	public function Delete($messageRef){
		return $this->_Call('Delete',Array(
			$messageRef
		));
	}

	/**
	 * Count fax broadcasts (containers) available in API account
	 *
	 * @param ApiRequestFaxjobCountBroadcasts $listRequest Count faxes request data
	 * @return ApiResponseItemsCount ItemsCount Api response object
	 */
	public function countBrodcasts($listRequest){
		return $this->_Call('countBrodcasts',Array(
			$listRequest
		));
	}

	/**
	 * list fax broadcasts (containers) available in API account
	 *
	 * @param ApiRequestFaxjobListBroadcasts $listRequest List faxes request data
	 * @return ApiResponseFaxjobBroadcasts FaxjobBroadcasts Api response object
	 */
	public function listBrodcasts($listRequest){
		return $this->_Call('listBrodcasts',Array(
			$listRequest
		));
	}

	/**
	 * Count fax recipients related to requested broadcasts in API account
	 *
	 * @param ApiRequestFaxjobCountMessages $listRequest Count fax recipients request data
	 * @return ApiResponseItemsCount ItemsCount Api response object
	 */
	public function countRecipients($listRequest){
		return $this->_Call('countRecipients',Array(
			$listRequest
		));
	}

	/**
	 * List fax recipients related to requested broadcasts in API account
	 *
	 * @param ApiRequestFaxjobListMessages $listRequest List fax recipients request data
	 * @return ApiResponseFaxjobMessages FaxjobMessages Api response object
	 */
	public function listRecipients($listRequest){
		return $this->_Call('listRecipients',Array(
			$listRequest
		));
	}

	/**
	 * Check if TIFF file with given refID already cached to API account storage
	 *
	 * @param string $tiffRef TIFF file refID to check existance of
	 * @return ApiResponse Simple Api response object
	 */
	public function checkTiffExists($tiffRef){
		return $this->_Call('checkTiffExists',Array(
			$tiffRef
		));
	}

	/**
     * Obtain currenct account balance
     *
     * @return ApiResponseBalance Api response object
     */
	public function getBalance(){
		return $this->_Call('getBalance',Array(
		));
	}
}
