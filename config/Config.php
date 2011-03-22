<?php

/**
 * config.php - dioxid
 * @author Andre 'Necrotex' Peiffer <necrotex@gmail.com>
 * @version 1.0
 * @package config
 */

namespace dioxid\config;

/**
 * Interface to work globally with the Configfile
 * @author Andre 'Necrotex' Peiffer <necrotex@gmail.com>
 * @date 22.03.2011 14:16:21
 *
 */
class Config {

	/**
	 * The Config
	 * @var array
	 */
	private static $config;

	public function __construct() { }

	/**
	 * Loads a configfile
	 * @param string $path
	 */
	public static function loadConfig($path){
		$config = file_get_contents($path);
		static::$config = parse_ini_string($config, true);
	}

	/**
	 * Method: getVal
	 * Gets a Value form the Config
	 * @param string $section Specify the Section
	 * @param string $val the Key
	 */
	public static function getVal($section, $val){
		if(key_exists($section, static::$config) && key_exists($val, static::$config[$section])){
			return static::$config[$section][$val];
		}
		return false;


	}


}

?>