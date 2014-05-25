<?php
App::uses('DoanhNghiep', 'Admin.Model');

/**
 * DoanhNghiep Test Case
 *
 */
class DoanhNghiepTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.doanh_nghiep'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DoanhNghiep = ClassRegistry::init('Admin.DoanhNghiep');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DoanhNghiep);

		parent::tearDown();
	}

}
