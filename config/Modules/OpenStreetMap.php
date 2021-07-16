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
class OpenStreetMap
{
	/** Max number to update addresses */
	public static $CRON_MAX_UPDATED_ADDRESSES = 1000;

	/** Allow modules */
	public static $ALLOW_MODULES = ['Accounts', 'Contacts', 'Competition', 'Vendors', 'Partners', 'Leads', 'Locations'];

	/** List of fields to appear in POP-UP */
	public static $FIELDS_IN_POPUP = [
		'Accounts' => ['accountname', 'email1', 'phone'],
		'Leads' => ['company', 'firstname', 'lastname', 'email'],
		'Partners' => ['subject', 'email'],
		'Competition' => ['subject', 'email'],
		'Vendors' => ['vendorname', 'email', 'website'],
		'Contacts' => ['firstname', 'lastname', 'email', 'phone'],
		'Locations' => ['subject', 'email'],
	];

	/** Name of connector to get coordinates. */
	public static $coordinatesServer = 'YetiForce';

	/**
	 * List of available coordinate servers, free list of servers is available on page https://wiki.openstreetmap.org/wiki/Search_engines
	 *  Value: 'server name' => ['driverName' => 'Nominatim', 'apiUrl' => 'https://nominatim.openstreetmap.org', 'docUrl' => 'https://wiki.openstreetmap.org/wiki/Nominatim']
	 */
	public static $coordinatesServers = ['YetiForce' => ['driverName' => 'YetiForce', 'apiUrl' => 'YetiForce']];

	/** Name of connector to get routing. */
	public static $routingServer = 'YetiForce';

	/**
	 * List of available routing servers, free list of servers is available on page https://wiki.openstreetmap.org/wiki/Routing/online_routers
	 *  Value: 'server name' => ['driverName' => 'xxx', 'apiUrl' => 'https://xxx.org', 'docUrl' => 'https://xxx', 'params' => []]
	 */
	public static $routingServers = [
		'YetiForce' => [
			'driverName' => 'YetiForce',
			'apiUrl' => 'YetiForce',
			'params' => ['preference' => 'fastest', 'profile' => 'driving-car', 'units' => 'km'],
		],
	];

	/** Tile layer url template, url used to load and display tile layers on the map. */
	public static $tileLayerServer = 'YetiForce';

	/**
	 * List of available Tile layer servers, free list of servers is available on page https://wiki.openstreetmap.org/wiki/Tile_servers
	 *  Value: 'server name' => 'Tile layer url template'
	 */
	public static $tileLayerServers = ['YetiForce' => 'YetiForce'];
}
