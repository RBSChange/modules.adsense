<?php
/**
 * @package modules.adsense.tests
 */
abstract class adsense_tests_AbstractBaseFunctionalTest extends adsense_tests_AbstractBaseTest
{
	/**
	 * @return void
	 */
	public function prepareTestCase()
	{
		$this->loadSQLResource('functional-test.sql', true, false);
	}
}