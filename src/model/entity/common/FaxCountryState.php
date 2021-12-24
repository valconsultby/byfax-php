<?php

namespace byfax\model\entity\common;

/**
 * FaxCountryState class. Used as sender and-or recipient details
 *
 */
class FaxCountryState{
	/**
	 * State ISO-2 code
	 *
	 * @var string
	 */
	public $stateCodeA2;
	/**
	 * Country ISO-3 code
	 *
	 * @var string
	 */
	public $countryCodeA3;
	/**
	 * State title
	 *
	 * @var string
	 */
	public $stateName;
}