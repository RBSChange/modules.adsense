<?php
/**
 * @package modules.adsense.tests
 */
abstract class adsense_tests_AbstractBaseUnitTest extends adsense_tests_AbstractBaseTest
{
	/**
	 * @return void
	 */
	public function prepareTestCase()
	{
		$this->resetDatabase();
	}
}