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
class Users
{
	/** Show information about logged user in footer */
	public static $IS_VISIBLE_USER_INFO_FOOTER = false;

	/** Is it possible to edit usernames? */
	public static $USER_NAME_IS_EDITABLE = true;

	/** Verify previously used usernames */
	public static $CHECK_LAST_USERNAME = true;

	/** Show role name */
	public static $SHOW_ROLE_NAME = true;

	/** Activation of favorite owners */
	public static $FAVORITE_OWNERS = false;

	/** Check if the password is in the stolen passwords database */
	public static $checkPwnedPassword = true;

	/** Provider to the check password is in the stolen passwords database */
	public static $pwnedPasswordProvider = 'YetiForce';
}
