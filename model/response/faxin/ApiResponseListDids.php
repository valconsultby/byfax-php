<?php

namespace byfax\model\response\faxin;

use byfax\model\entity\faxin\FaxDid;

use byfax\model\response\common\ApiResponse;

/**
 * ApiResponseListDids short summary.
 * ApiResponseListDids description.
 *
 */
class ApiResponseListDids extends ApiResponse{
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
	 * Faxin numbers
	 *
	 * @var FaxDid[]
	 */
	public $items;
}