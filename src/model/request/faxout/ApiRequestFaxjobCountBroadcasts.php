<?php

namespace byfax\model\request\faxout;

/**
 * CRequestFaxjobCountBroadcasts class.
 *
 */
class ApiRequestFaxjobCountBroadcasts{
	/**
	 * Container RefIDs to list
	 *
	 * @var string[]
	 */
	public $broadcastRefs;
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