<?php

namespace byfax\model\response\common;

/**
 * DocumentPreview response object to obtaine preview binary content and number of pages
 *
 */
class ApiResponseDocPreview extends ApiResponseFileDownload{
	/**
	 * Number of pages in preview
	 *
	 * @var int
	 */
	public $pages;
}