<?php

namespace byfax\model\response\cover;

use byfax\model\entity\cover\FaxCover;

use byfax\model\response\common\ApiResponse;

/**
 * The ListCovers response object to obtain available cover-pages in storage
 *
 */
class ApiResponseListCovers extends ApiResponse{
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
	 * Available cover-pages list
	 *
	 * @var FaxCover[]
	 */
	public $items;
}