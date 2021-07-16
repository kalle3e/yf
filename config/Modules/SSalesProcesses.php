<?php

/**
 * Configuration file.
 * This file is auto-generated.
 *
 * @package Config
 *
 * @copyright YetiForce Sp. z o.o
 * @license   YetiForce Public License 3.0 (licenses/LicenseEN.txt or yetiforce.com)
 */

namespace Config\Modules;

/**
 * Configuration Class.
 */
class SSalesProcesses
{
	/** Columns visible in Sales hierarchy [$label => $columnName] */
	public static $COLUMNS_IN_HIERARCHY = [];

	/** Max depth of hierarchy */
	public static $MAX_HIERARCHY_DEPTH = 50;

	/** Count Sales in hierarchy */
	public static $COUNT_IN_HIERARCHY = true;

	/** Show summary products services bookmark */
	public static $SHOW_SUMMARY_PRODUCTS_SERVICES = true;

	/** Default view for record detail view. Values: LBL_RECORD_DETAILS or LBL_RECORD_SUMMARY */
	public static $DEFAULT_VIEW_RECORD = 'LBL_RECORD_PREVIEW';
}
