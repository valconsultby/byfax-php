<?php

namespace byfax\model\response\faxout;

use byfax\model\entity\faxout\FaxReportProcess;

use byfax\model\response\common\ApiResponse;

/**
 * ApiResponseFaxjobProcess short summary.
 * ApiResponseFaxjobProcess description.
 *
 */
class ApiResponseFaxjobProcess extends ApiResponse{
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
	 * @var FaxReportProcess[]
	 */
	public $items;
}