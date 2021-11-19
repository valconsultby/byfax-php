<?php

namespace byfax\model\entity\faxin;

/**
 * FaxDidGroup class. Used as sender and-or recipient details
 *
 */
class FaxDidGroup{
	/**
	 * Region UUID
	 *
	 * @var string
	 */
	public $refID;
	/**
	 * Country ISO code
	 *
	 * @var string
	 */
	public $countryCodeA3;
	/**
	 * Country state code
	 *
	 * @var string
	 */
	public $stateCodeA2;
	/**
	 * Region city name
	 *
	 * @var string
	 */
	public $cityName;
	/**
	 * Country phone code
	 *
	 * @var string
	 */
	public $phoneCode;
	/**
	 * Area phone code
	 *
	 * @var string
	 */
	public $areaCode;
	/**
	 * Region DID type
	 *
	 * @var string
	 */
	public $didType;
	/**
	 * Region is available
	 *
	 * @var boolean
	 */
	public $isAvailable;
	/**
	 * Region has Regulation requirement
	 *
	 * @var boolean
	 */
	public $hasRegulation;
	/**
	 * Regulation DID address type
	 *
	 * @var string
	 */
	public $didAddressType;
	/**
	 * Region has registration ProofRequired
	 *
	 * @var boolean
	 */
	public $regProofRequired;
}