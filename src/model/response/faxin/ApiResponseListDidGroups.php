<?php

namespace byfax\model\response\faxin;

use byfax\model\entity\faxin\FaxDidGroup;

use byfax\model\response\common\ApiResponse;

/**
 * ApiResponseListDidGroups short summary.
 * ApiResponseListDidGroups description.
 *
 */
class ApiResponseListDidGroups extends ApiResponse{
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
	 * Faxin country states
	 *
	 * @var FaxDidGroup[]
	 */
	public $items;
}