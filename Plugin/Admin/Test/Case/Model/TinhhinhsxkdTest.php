<?php
App::uses('Tinhhinhsxkd', 'Admin.Model');

/**
 * Tinhhinhsxkd Test Case
 *
 */
class TinhhinhsxkdTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.tinhhinhsxkd'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tinhhinhsxkd = ClassRegistry::init('Admin.Tinhhinhsxkd');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tinhhinhsxkd);

		parent::tearDown();
	}

}
