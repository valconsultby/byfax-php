<?php

namespace byfax\model\request\faxout;

/**
 * ApiRequestFaxjobProcess class. Top level class to pass FaxResubmit request
 *
 */
class ApiRequestFaxjobProcess{
	/**
	 * broadcastRef list
	 *
	 * @var string[]
	 */
	public $broadcastRefs;
	/**
	 * sendRef list
	 *
	 * @var string[]
	 */
	public $sendRefs;
	/**
	 * messageRef list
	 *
	 * @var string[]
	 */
	public $messageRefs;
}