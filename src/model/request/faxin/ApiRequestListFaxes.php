<?php

namespace byfax\model\request\faxin;

use byfax\model\entity\common\ListPagination;

/**
 * CRequestListFaxes class.
 *
 */
class ApiRequestListFaxes extends ApiRequestCountFaxes{
	/**
	 * List request pagination
	 *
	 * @var ListPagination
	 */
	public $pagination;
}