<?php

namespace byfax\model\request\faxout;

use byfax\model\entity\common\ListPagination;

/**
 * CRequestFaxjobListMessages class.
 *
 */
class ApiRequestFaxjobListMessages extends ApiRequestFaxjobCountMessages{
	/**
	 * List request pagination
	 *
	 * @var ListPagination
	 */
	public $pagination;
}