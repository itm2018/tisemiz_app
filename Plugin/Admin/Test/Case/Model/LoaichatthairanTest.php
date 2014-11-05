<?php
App::uses('Loaichatthairan', 'Admin.Model');

/**
 * Loaichatthairan Test Case
 *
 */
class LoaichatthairanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.loaichatthairan'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Loaichatthairan = ClassRegistry::init('Admin.Loaichatthairan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Loaichatthairan);

		parent::tearDown();
	}

}
