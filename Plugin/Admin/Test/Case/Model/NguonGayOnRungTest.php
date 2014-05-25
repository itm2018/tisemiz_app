<?php
App::uses('NguonGayOnRung', 'Admin.Model');

/**
 * NguonGayOnRung Test Case
 *
 */
class NguonGayOnRungTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.nguon_gay_on_rung'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->NguonGayOnRung = ClassRegistry::init('Admin.NguonGayOnRung');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NguonGayOnRung);

		parent::tearDown();
	}

}
