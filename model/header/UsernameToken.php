<?php

namespace byfax\model\header;

/**
 * The API key/secret auth header class
 *
 */
class UsernameToken{
	/**
	 * API key
	 *
	 * @var string
	 */
	public $Username;
	/**
	 * API secret
	 *
	 * @var string
	 */
	public $Password;
}