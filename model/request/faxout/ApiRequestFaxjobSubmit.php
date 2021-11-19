<?php

namespace byfax\model\request\faxout;

use byfax\model\entity\common\FaxContact;
use byfax\model\entity\common\FaxRecipient;
use byfax\model\entity\common\FaxDocument;

/**
 * ApiRequestFaxjobSubmit class. Top level class to pass FaxSubmit request
 *
 */
class ApiRequestFaxjobSubmit{
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
	 * date-time with timezone to send a fax at
	 *
	 * @var string
	 */
	public $sendAt;
	/**
	 * Fax send quality (enum value)
	 *
	 * @var string
	 */
	public $sendQuality;
	/**
	 * Fax send mode (text or photo, enum value)
	 *
	 * @var string
	 */
	public $sendMode;
	/**
	 * Message sender details
	 *
	 * @var FaxContact
	 */
	public $Sender;
	/**
	 * Message recipients list
	 *
	 * @var FaxRecipient[]
	 */
	public $Recipients;
	/**
	 * Message documents list
	 *
	 * @var FaxDocument[]
	 */
	public $Documents;
	/**
	 * Message cover refID
	 *
	 * @var string
	 */
	public $coverRef;
	/**
	 * Message cover text
	 *
	 * @var string
	 */
	public $coverText;
}