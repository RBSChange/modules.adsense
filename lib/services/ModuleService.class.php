<?php
/**
 * @package modules.adsense.lib.services
 */
class adsense_ModuleService extends ModuleBaseService
{
	/**
	 * Singleton
	 * @var adsense_ModuleService
	 */
	private static $instance = null;

	/**
	 * @return adsense_ModuleService
	 */
	public static function getInstance()
	{
		if (is_null(self::$instance))
		{
			self::$instance = self::getServiceClassInstance(get_class());
		}
		return self::$instance;
	}
}