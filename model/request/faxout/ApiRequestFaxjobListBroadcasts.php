<?php

namespace byfax\model\request\faxout;

use byfax\model\entity\common\ListPagination;

/**
 * CRequestFaxjobListBroadcasts class.
 *
 */
class ApiRequestFaxjobListBroadcasts extends ApiRequestFaxjobCountBroadcasts{
	/**
	 * List request pagination
	 *
	 * @var ListPagination
	 */
	public $pagination;
}