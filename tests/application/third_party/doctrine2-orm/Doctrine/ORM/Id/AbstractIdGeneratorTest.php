<?php

namespace Doctrine\ORM\Id;

require_once dirname(__FILE__) . '/../../../../../../../application/third_party/doctrine2-orm/Doctrine/ORM/Id/AbstractIdGenerator.php';

/**
 * Test class for AbstractIdGenerator.
 * Generated by PHPUnit on 2012-03-18 at 15:24:55.
 */
class AbstractIdGeneratorTest extends \PHPUnit_Framework_TestCase
{

	/**
	 * @var AbstractIdGenerator
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new AbstractIdGenerator;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{
		
	}

	/**
	 * @todo Implement testIsPostInsertGenerator().
	 */
	public function testIsPostInsertGenerator()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

}

?>