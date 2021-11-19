<?php

namespace byfax\model\response\common;

use byfax\model\entity\common\FaxCountry;

/**
 * ApiResponseListCountries short summary.
 * ApiResponseListCountries description.
 *
 */
class ApiResponseListCountries extends ApiResponse{
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
	 * Faxin supported countries list
	 *
	 * @var FaxCountry[]
	 */
	public $items;
}