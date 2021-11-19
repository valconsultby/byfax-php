<?php

namespace byfax\enum;

/**
 * Fax FileFormat value enumeration
 */
abstract class FaxFileFormat{
	/**
	 * @var string
	 */
	const UNKNOWN="UNKNOWN";
	/**
	 * @var string
	 */
	const CLASS_F="CLASS_F";
	/**
	 * @var string
	 */
	const CLASS_F_SYMMETRIC="CLASS_F_SYMMETRIC";
	/**
	 * @var string
	 */
	const SFF="SFF";
	/**
	 * @var string
	 */
	const TIFF_G3="TIFF_G3";
	/**
	 * @var string
	 */
	const TIFF_G3_SYMMETRIC="TIFF_G3_SYMMETRIC";
	/**
	 * @var string
	 */
	const TIFF_G4="TIFF_G4";
	/**
	 * @var string
	 */
	const TIFF_G4_SYMMETRIC="TIFF_G4_SYMMETRIC";
	/**
	 * @var string
	 */
	const COLOR_JPEG="COLOR_JPEG";
	/**
	 * @var string
	 */
	const ASCII="ASCII";
	/**
	 * @var string
	 */
	const BINARY="BINARY";
}