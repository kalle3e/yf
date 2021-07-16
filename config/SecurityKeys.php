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

namespace Config;

/**
 * Configuration Class.
 */
class SecurityKeys
{
	/** Key to encrypt passwords, changing the key results in the loss of all encrypted data. */
	public static $encryptionPass = 'yeti';

	/** Encryption method. */
	public static $encryptionMethod = 'AES-256-CBC';
}
