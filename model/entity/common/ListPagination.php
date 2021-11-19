<?php

namespace byfax\model\entity\common;

/**
 * CEntityListPagination short summary.
 * CEntityListPagination description.
 *
 */
class ListPagination{
	/**
	 * The page number, starting at 0.
	 *
	 * @var int
	 */
	public $pageNumber;
	/**
	 * The page size (max number of entities that are displayed in the response).
	 *
	 * @var int
	 */
	public $pageSize;
}