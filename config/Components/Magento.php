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

namespace Config\Components;

/**
 * Configuration Class.
 */
class Magento
{
	/** Type of connector for integration with Magento. */
	public static $connector = 'Token';

	/** Magento URL address */
	public static $addressApi = '';

	/** Username to account in Magento. */
	public static $username = '';

	/** Password to account in Magento. */
	public static $password = '';

	/** Set master source: yetiforce or magento */
	public static $masterSource = 'magento';
}
