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
class OSSMail
{
	/** Product name */
	public static $product_name = 'YetiForce';

	/** Validate cert */
	public static $validate_cert = false;

	/** Add connection type */
	public static $imap_open_add_connection_type = true;

	/** Default host. */
	public static $default_host = ['ssl://imap.gmail.com' => 'ssl://imap.gmail.com'];

	/** Port used to connect to IMAP. */
	public static $default_port = 993;

	/** Name of SMTP server */
	public static $smtp_server = 'ssl://smtp.gmail.com';

	/** Login to SMTP server */
	public static $smtp_user = '%u';

	/** SMTP password (if required) if you use %p as the password Roundcube will use the current user's password for login */
	public static $smtp_pass = '%p';

	/** Default smtp port */
	public static $smtp_port = 465;

	/** Set default language */
	public static $language = 'en_US';

	/** User name domain */
	public static $username_domain = 'gmail.com';

	/** Skin logo */
	public static $skin_logo = ['*' => '/images/null.png'];

	/** Ip check. */
	public static $ip_check = false;

	/** Enable spell check */
	public static $enable_spellcheck = true;

	/** Identities level. */
	public static $identities_level = 0;

	/** Set session lifetime */
	public static $session_lifetime = 30;

	/** Set default prefix */
	public static $db_prefix = 'roundcube_';

	/** Support url */
	public static $support_url = 'http://yetiforce.com';

	/** Encryption key of data */
	public static $des_key = 'rGOQ26hR%gxlZk=QA!$HMOvb';

	/** List of plugins */
	public static $plugins = [
		'identity_smtp',
		'yetiforce',
		'thunderbird_labels',
		'zipdownload',
		'archive',
		'authres_status',
	];

	/** Mime param folding */
	public static $mime_param_folding = 0;

	/** Auto create user. */
	public static $auto_create_user = true;

	/** Mail page size. */
	public static $mail_pagesize = 30;

	/** Address book page size. */
	public static $addressbook_pagesize = 50;

	/** Turn on/off prefer html */
	public static $prefer_html = true;

	/** Turn on/off preview pane */
	public static $preview_pane = false;

	/** Html editor */
	public static $htmleditor = 1;

	/** Set autosave time */
	public static $draft_autosave = 300;

	/** Mdn requests */
	public static $mdn_requests = 0;

	/** Send mail delay */
	public static $sendmail_delay = 0;

	/** Set the long date format */
	public static $date_long = 'Y-m-d H:i';

	/** Set date format */
	public static $date_format = 'Y-m-d';

	/** Set time format */
	public static $time_format = 'H:i';

	/** Turn on/off show images. Value: 0/1 */
	public static $show_images = 0;

	/** Imap cache */
	public static $imap_cache = 'db';

	/** messages_cache */
	public static $messages_cache = 'db';

	/** Set reply mode */
	public static $reply_mode = 1;

	/** Max retries imap */
	public static $imap_max_retries = 0;

	/** Enable this for imap and MS Exchange bug "Kerberos error: Credentials cache file  ... not found "DISABLE_AUTHENTICATOR" => "GSSAPI" */
	public static $imap_params = [];

	/** Connection options imap. */
	public static $imap_conn_options = ['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]];

	/** Connection options smtp. */
	public static $smtp_conn_options = ['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]];

	/** Smtp time out */
	public static $smtp_timeout = 5;

	/** The value to give when sending */
	public static $smtp_helo_host = 'YetiForceCRM';

	/** Set the skin */
	public static $skin = 'yetiforce';

	/** Set the desktop */
	public static $layout = 'desktop';

	/** List cols */
	public static $list_cols = [
		'flag',
		'status',
		'subject',
		'fromto',
		'date',
		'size',
		'attachment',
		'authres_status',
		'threads',
	];

	/** Enable authres status column */
	public static $enable_authres_status_column = true;

	/** Show statuses */
	public static $show_statuses = 127;

	/** Root directory */
	public static $root_directory = ROOT_DIRECTORY . DIRECTORY_SEPARATOR;

	/** Enable variables in signature */
	public static $enable_variables_in_signature = false;


	/**
	 * Debug level. sum of: 1 = log; 4 = show, 8 = trace
	 */
	public static function debug_level()
	{
		return \Config\Debug::$ROUNDCUBE_DEBUG_LEVEL;
	}


	/**
	 * Per user logging
	 */
	public static function per_user_logging()
	{
		return \Config\Debug::$ROUNDCUBE_PER_USER_LOGGING;
	}


	/**
	 * Log sent messages to cache/logs/sendmail
	 */
	public static function smtp_log()
	{
		return \Config\Debug::$ROUNDCUBE_SMTP_LOG;
	}


	/**
	 * Logins successful/failed
	 */
	public static function log_logins()
	{
		return \Config\Debug::$ROUNDCUBE_LOG_LOGINS;
	}


	/**
	 * Session authentication debug
	 */
	public static function log_session()
	{
		return \Config\Debug::$ROUNDCUBE_LOG_SESSION;
	}


	/**
	 * Sql queries debug
	 */
	public static function sql_debug()
	{
		return \Config\Debug::$ROUNDCUBE_SQL_DEBUG;
	}


	/**
	 * Imap conversation debug
	 */
	public static function imap_debug()
	{
		return \Config\Debug::$ROUNDCUBE_IMAP_DEBUG;
	}


	/**
	 * Ldap conversation debug
	 */
	public static function ldap_debug()
	{
		return \Config\Debug::$ROUNDCUBE_LDAP_DEBUG;
	}


	/**
	 * Smtp conversation debug
	 */
	public static function smtp_debug()
	{
		return \Config\Debug::$ROUNDCUBE_SMTP_DEBUG;
	}


	/**
	 * Debugging information about php memory consumption
	 */
	public static function devel_mode()
	{
		return \Config\Debug::$ROUNDCUBE_DEVEL_MODE;
	}


	/**
	 * Log dir
	 */
	public static function log_dir()
	{
		if (!defined('RCUBE_INSTALL_PATH')) {
			define('RCUBE_INSTALL_PATH', realpath(ROOT_DIRECTORY . DIRECTORY_SEPARATOR . 'public_html' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'OSSMail' . DIRECTORY_SEPARATOR . 'roundcube'));
		}
		return RCUBE_INSTALL_PATH . "/../../../../cache/logs/";
	}


	/**
	 * Temp dir
	 */
	public static function temp_dir()
	{
		if (!defined('RCUBE_INSTALL_PATH')) {
			define('RCUBE_INSTALL_PATH', realpath(ROOT_DIRECTORY . DIRECTORY_SEPARATOR . 'public_html' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'OSSMail' . DIRECTORY_SEPARATOR . 'roundcube'));
		}
		return RCUBE_INSTALL_PATH . "/../../../../cache/mail/";
	}


	/**
	 * Database connection string (DSN) for read+write operations
	 */
	public static function db_dsnw()
	{
		return 'mysql://' . \Config\Db::$db_username . ':' . \Config\Db::$db_password . '@' . \Config\Db::$db_server . ':' . \Config\Db::$db_port . '/' . \Config\Db::$db_name;
	}
}
