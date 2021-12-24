<?php

namespace byfax\model\response\faxout;

use byfax\model\entity\faxout\FaxReportBroadcast;

use byfax\model\response\common\ApiResponse;

/**
 * CResponseFaxjobBroadcasts short summary.
 * CResponseFaxjobBroadcasts description.
 *
 */
class ApiResponseFaxjobBroadcasts extends ApiResponse{
	/**
	 * Result items count
	 *
	 * @var int
	 */
	public $countResult;
	/**
	 * Available items count
	 *
	 * @var int
	 */
	public $countTotal;
	/**
	 * Fax message reports list
	 *
	 * @var FaxReportBroadcast[]
	 */
	public $items;
}