<?php

namespace byfax\model\request\faxout;

/**
 * CRequestFaxjobCountMessages class.
 *
 */
class ApiRequestFaxjobCountMessages{
	/**
	 * Container RefIDs to list
	 *
	 * @var string[]
	 */
	public $broadcastRefs;
	/**
	 * Recpients RefIDs to list
	 *
	 * @var string[]
	 */
	public $messageRefs;
	/**
	 * Date to list faxes from
	 *
	 * @var string
	 */
	public $dateFrom;
	/**
	 * Date to list faxes to
	 *
	 * @var string
	 */
	public $dateTill;
}