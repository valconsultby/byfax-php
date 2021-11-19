<?php

namespace byfax\model\response\common;

/**
 * Base API response class. All function response objects inherit it
 *
 */
class ApiResponse{
	/**
	 * Api response code (Enum value)
	 *
	 * @var string
	 */
	public $stateCode;
	/**
	 * Api response message (available in case of error)
	 *
	 * @var string
	 */
	public $stateMessage;
}