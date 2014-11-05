<?php
App::uses('Hientrangnuocthai', 'Admin.Model');

/**
 * Hientrangnuocthai Test Case
 *
 */
class HientrangnuocthaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.hientrangnuocthai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Hientrangnuocthai = ClassRegistry::init('Admin.Hientrangnuocthai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Hientrangnuocthai);

		parent::tearDown();
	}

}
