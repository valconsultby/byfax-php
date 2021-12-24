<?php

namespace byfax\model\response\common;

/**
 * The object-reference response class, usually contains refID of the newly created instance
 *
 */
class ApiResponseObject extends ApiResponse{
	/**
	 * Object refID (max 32 sybmols long)
	 *
	 * @var string
	 */
	public $objectRef;
}