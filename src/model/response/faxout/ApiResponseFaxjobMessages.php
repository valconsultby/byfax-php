<?php

namespace byfax\model\response\faxout;

use byfax\model\entity\faxout\FaxReportMessage;

use byfax\model\response\common\ApiResponse;

/**
 * CResponseFaxjobMessages short summary.
 * CResponseFaxjobMessages description.
 *
 */
class ApiResponseFaxjobMessages extends ApiResponse{
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
	 * @var FaxReportMessage[]
	 */
	public $items;
}