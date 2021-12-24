<?php

namespace byfax\model\request\faxout;

use byfax\model\entity\common\FaxContact;
use byfax\model\entity\common\FaxDocument;

/**
 * ApiRequestFaxjobMessage class. Top level class to pass FaxSubmit request
 *
 */
class ApiRequestFaxjobMessage{
	/**
	 * Message broadcasting reference
	 *
	 * @var string
	 */
	public $broadcastRef;
	/**
	 * Message send reference
	 *
	 * @var string
	 */
	public $sendRef;
	/**
	 * Message reference
	 *
	 * @var string
	 */
	public $messageRef;
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
	 * Message priority (1 max 100 min)
	 *
	 * @var int
	 */
	public $Priority;
	/**
	 * Number of retries after first Busy, NoAnswer etc
	 *
	 * @var int
	 */
	public $busyRetry;
	/**
	 * Message sender details
	 *
	 * @var FaxContact
	 */
	public $Sender;
	/**
	 * Message recipient
	 *
	 * @var FaxContact
	 */
	public $Recipient;
	/**
	 * Message document (ready TIFF only)
	 *
	 * @var FaxDocument
	 */
	public $Document;
}