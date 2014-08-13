<?php
App::uses('Hientrangkhithai', 'Admin.Model');

/**
 * Hientrangkhithai Test Case
 *
 */
class HientrangkhithaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.hientrangkhithai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Hientrangkhithai = ClassRegistry::init('Admin.Hientrangkhithai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Hientrangkhithai);

		parent::tearDown();
	}

}
