<?php

namespace byfax\model\entity\faxin;

/**
 * FaxDid class. Used as sender and-or recipient details
 *
 */
class FaxDid{
	/**
	 * DID RefID
	 *
	 * @var string
	 */
	public $didRef;
	/**
	 * Number reservation customer RefID
	 *
	 * @var string
	 */
	public $addressRef;
	/**
	 * Number DID group RefID
	 *
	 * @var string
	 */
	public $didGroupRef;
	/**
	 * @var string
	 */
	public $state;
	/**
	 * @var string
	 */
	public $stateMessage;
	/**
	 * Number in E-164 format
	 *
	 * @var string
	 */
	public $didE164;
	/**
	 * Number formatted
	 *
	 * @var string
	 */
	public $didFormatted;
	/**
	 * Number country ISO code $didStateCodeA2
	 *
	 * @var string
	 */
	public $didCountryCodeA3;
	/**
	 * Number country-state ISO code
	 *
	 * @var string
	 */
	public $didStateCodeA2;
	/**
	 * Number country phone code
	 *
	 * @var string
	 */
	public $didPhoneCode;
	/**
	 * Number area phone code
	 *
	 * @var string
	 */
	public $didAreaCode;
	/**
	 * Number city
	 *
	 * @var string
	 */
	public $didCity;
	/**
	 * Region DID type
	 *
	 * @var string
	 */
	public $didType;
	/**
	 * Received faxes count
	 *
	 * @var int
	 */
	public $inboxCount;
	/**
	 * Is DID can be extended now
	 *
	 * @var boolean
	 */
	public $canExtend;
	/**
	 * Is DID can be re-ordered now
	 *
	 * @var boolean
	 */
	public $canRestore;
	/**
	 * Is DID can be cancelled now
	 *
	 * @var boolean
	 */
	public $canCancel;
	/**
	 * Number reservation date
	 *
	 * @var string
	 */
	public $reservedAt;
	/**
	 * Number reservation ends date
	 *
	 * @var string
	 */
	public $reservedTill;
}