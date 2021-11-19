<?php

namespace byfax\model\entity\common;

/**
 * FaxCountry class. Used as sender and-or recipient details
 *
 */
class FaxCountry{
	/**
	 * Country ISO-2 code
	 *
	 * @var string
	 */
	public $iso2;
	/**
	 * Country ISO-3 code
	 *
	 * @var string
	 */
	public $iso3;
	/**
	 * Country has states
	 *
	 * @var boolean
	 */
	public $hasStates;
	/**
	 * Country has regulation requirement
	 *
	 * @var boolean
	 */
	public $hasRegulation;
	/**
	 * Country phone code
	 *
	 * @var string
	 */
	public $phoneCode;
}