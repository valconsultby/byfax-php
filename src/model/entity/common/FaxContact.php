<?php

namespace byfax\model\entity\common;

/**
 * The FaxContact class definition, used as Recipient or Sender details
 *
 */
class FaxContact{
	/**
	 * Contact fullname
	 *
	 * @var string
	 */
	public $Name;
	/**
	 * Contact company name
	 *
	 * @var string
	 */
	public $Company;
	/**
	 * Contact company name
	 *
	 * @var string
	 */
	public $Number;
	/**
	 * Message timezone string
	 *
	 * @var string
	 */
	public $Timezone;
}