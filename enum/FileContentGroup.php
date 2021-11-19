<?php

namespace byfax\enum;

/**
 * FileContentGroup short summary.
 */
abstract class FileContentGroup{
	/**
	 * @var string
	 */
	const UNK="UNK";
	/**
	 * @var string
	 */
	const PDF="PDF";
	/**
	 * @var string
	 */
	const TIFF="TIFF";
	/**
	 * @var string
	 */
	const IMAGE="IMAGE";
	/**
	 * @var string
	 */
	const MS_OFFICE="MS_OFFICE";
	/**
	 * @var string
	 */
	const OP_OFFICE="OP_OFFICE";
	/**
	 * @var string
	 */
	const ST_OFFICE="ST_OFFICE";
	/**
	 * @var string
	 */
	const PLAIN_TEXT="PLAIN_TEXT";
	/**
	 * @var string
	 */
	const OTHER="OTHER";
	/**
	 * @var string
	 */
	const HTML="HTML";
}