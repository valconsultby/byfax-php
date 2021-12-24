<?php

namespace byfax\model\entity\common;

/**
 * FaxRecipient class describes inherits FaxContact object and completely described recipient details
 *
 */
class FaxRecipient extends FaxContact{
	/**
	 * Message refID
	 *
	 * @var string
	 */
	public $messageRef;
	/**
	 * Message send refID (to be able to obtain details for message blocks)
	 *
	 * @var string
	 */
	public $sendRef;
	/**
	 * Message header string
	 *
	 * @var string
	 */
	public $Header;
	/**
	 * Message subject string
	 *
	 * @var string
	 */
	public $Subject;
	/**
	 * Message recipient greeting
	 *
	 * @var FaxGreeting
	 */
	public $Greeting;
}