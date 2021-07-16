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
class Import
{
	/** Threshold record limit for immediate import. If record count is more than this, then the import is scheduled through cron job */
	public static $IMMEDIATE_IMPORT_LIMIT = 1000;

	/** Individual batch limit - Specified number of records will be imported at one shot and the cycle will repeat till all records are imported */
	public static $BATCH_LIMIT = 250;

	/** Records for reference fields modules are created while importing, when record is not found. */
	public static $CREATE_REFERENCE_RECORD = false;

	/** Save record including handlers */
	public static $SAVE_BY_HANDLERS = true;

	/** Missing picklist values are added */
	public static $ADD_PICKLIST_VALUE = true;
}
