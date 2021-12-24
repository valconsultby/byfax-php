<?php

namespace byfax\model\entity\common;

/**
 * Fax greeting file content and details descritpion ovject
 *
 */
class FaxGreeting{
	/**
	 * Greeting refID
	 *
	 * @var string
	 */
	public $greetingRef;
	/**
	 * Greeting language code (EN, RU available only)
	 *
	 * @var string
	 */
	public $languageISO;
	/**
	 * Greeting title
	 *
	 * @var string
	 */
	public $greetingTitle;
	/**
	 * Greeting document file
	 *
	 * @var FaxFile
	 */
	public $greetingFile;
}