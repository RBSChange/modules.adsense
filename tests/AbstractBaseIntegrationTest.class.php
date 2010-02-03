<?php
/**
 * @package modules.adsense.tests
 */
abstract class adsense_tests_AbstractBaseIntegrationTest extends adsense_tests_AbstractBaseTest
{
	/**
	 * @return void
	 */
	public function prepareTestCase()
	{
		$this->loadSQLResource('integration-test.sql', true, false);
	}
}