<?php

namespace byfax\model\response\faxin;

use byfax\model\entity\common\FaxCountryState;

use byfax\model\response\common\ApiResponse;

/**
 * ApiResponseListCountryStates short summary.
 * ApiResponseListCountryStates description.
 *
 */
class ApiResponseListCountryStates extends ApiResponse{
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
	 * @var FaxCountryState[]
	 */
	public $items;
}