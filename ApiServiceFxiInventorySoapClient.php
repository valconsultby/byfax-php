<?php
namespace byfax;

use byfax\model\header\UsernameToken;

use byfax\model\entity\common\FaxCountry;
use byfax\model\entity\common\FaxCountryState;

use byfax\model\entity\faxin\FaxDidGroup;
use byfax\model\entity\faxin\FaxDid;

use byfax\model\response\common\ApiResponseListCountries;

use byfax\model\response\faxin\ApiResponseListCountryStates;
use byfax\model\response\faxin\ApiResponseListDidGroups;
use byfax\model\response\faxin\ApiResponseListDids;

/**
 * @service ApiServiceFxiInventorySoapClient
 */
class ApiServiceFxiInventorySoapClient{
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
	public $_HeaderUsernameToken=null;

	public function __construct($serviceUri='https://sandbox.byfax.biz'){
		$this->_ServiceUri = $serviceUri . '/soap/1.1/faxin/inventory';
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
                    'FaxCountry' => FaxCountry::class,
                    'FaxCountryState' => FaxCountryState::class,
                    'FaxDidGroup' => FaxDidGroup::class,
                    'FaxDid' => FaxDid::class,

                    'ApiResponseListCountries' => ApiResponseListCountries::class,
                    'ApiResponseListCountryStates' => ApiResponseListCountryStates::class,
                    'ApiResponseListDidGroups' => ApiResponseListDidGroups::class,
                    'ApiResponseListDids' => ApiResponseListDids::class,
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
	 * listCountries request handler
	 *
	 * @return ApiResponseListCountries Api response object
	 */
	public function listCountries(){
		return $this->_Call('listCountries',Array(
		));
	}

	/**
	 * Summary of listStates
	 *
	 * @param string $countryCodeA3 Country ISO-3 code
	 * @return ApiResponseListCountryStates Api response object
	 */
	public function listStates($countryCodeA3){
		return $this->_Call('listStates',Array(
			$countryCodeA3
		));
	}

	/**
	 * Summary of listDidGroups
	 *
	 * @param string $countryCodeA3 Country ISO-3 code
	 * @param string $stateCodeA2 Country state ISO-2 code
	 * @return ApiResponseListDidGroups Api response object
	 */
	public function listDidGroups($countryCodeA3,$stateCodeA2){
		return $this->_Call('listDidGroups',Array(
			$countryCodeA3,
			$stateCodeA2
		));
	}

	/**
	 * Summary of getDidGroup
	 *
	 * @param string $groupRef DidGroup refID
	 * @return ApiResponseListDidGroups Api response object
	 */
	public function getDidGroup($groupRef){
		return $this->_Call('getDidGroup',Array(
			$groupRef
		));
	}

	/**
	 * Summary of listDids
	 *
	 * @return ApiResponseListDids Api response object
	 */
	public function listDids(){
		return $this->_Call('listDids',Array(
		));
	}
}
