<?php
App::uses('Baocaogsmt', 'Admin.Model');

/**
 * Baocaogsmt Test Case
 *
 */
class BaocaogsmtTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.baocaogsmt'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Baocaogsmt = ClassRegistry::init('Admin.Baocaogsmt');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Baocaogsmt);

		parent::tearDown();
	}

}
