<?php
App::uses('Ketquaphantichnuocthai', 'Admin.Model');

/**
 * Ketquaphantichnuocthai Test Case
 *
 */
class KetquaphantichnuocthaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.ketquaphantichnuocthai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ketquaphantichnuocthai = ClassRegistry::init('Admin.Ketquaphantichnuocthai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ketquaphantichnuocthai);

		parent::tearDown();
	}

}
