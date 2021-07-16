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
class Competition
{
	/** Columns visible in hierarchy [$label => $columnName] */
	public static $COLUMNS_IN_HIERARCHY = [
		'LBL_SUBJECT' => 'subject',
		'Email' => 'email',
		'Vat ID' => 'vat_id',
		'LBL_ASSIGNED_TO' => 'assigned_user_id',
	];

	/** Max depth of hierarchy */
	public static $MAX_HIERARCHY_DEPTH = 50;

	/** Count Sales in hierarchy */
	public static $COUNT_IN_HIERARCHY = true;
}
