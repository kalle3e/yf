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
class OSSSoldServices
{
	/** How long before the renewal date should the status be changed. Ex. 2 month, 1 day https://secure.php.net/manual/en/datetime.formats.php */
	public static $RENEWAL_TIME = '2 month';

	/** Show relations in the modal */
	public static $SHOW_RELATION_IN_MODAL = [
		'relationField' => 'parent_id',
		'module' => 'Accounts',
		'relatedModule' => ['FInvoice', 'ModComments', 'Calendar', 'Documents'],
	];

	/** Show hierarchy in modal */
	public static $SHOW_HIERARCHY_IN_MODAL = [];

	/** Renewing the customer function */
	public static $RENEWAL_CUSTOMER_FUNCTION = [];
}
