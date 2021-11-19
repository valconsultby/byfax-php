<?php

namespace byfax\model\response\faxin;

use byfax\model\entity\faxin\FaxinMessage;

use byfax\model\response\common\ApiResponse;

/**
 * ApiResponseListFaxes short summary.
 * ApiResponseListFaxes description.
 *
 */
class ApiResponseListFaxes extends ApiResponse{
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
	 * Faxin messages
	 *
	 * @var FaxinMessage[]
	 */
	public $items;
}