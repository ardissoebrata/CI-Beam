<?php

namespace Symfony\Component\Yaml;

require_once dirname(__FILE__) . '/../../../../../../../../application/third_party/doctrine2-orm/Doctrine/Symfony/Component/Yaml/Yaml.php';

/**
 * Test class for Yaml.
 * Generated by PHPUnit on 2012-03-18 at 15:25:32.
 */
class YamlTest extends \PHPUnit_Framework_TestCase
{

	/**
	 * @var Yaml
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new Yaml;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{
		
	}

	/**
	 * @todo Implement testParse().
	 */
	public function testParse()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testDump().
	 */
	public function testDump()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

}

?>