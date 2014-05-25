<?php
App::uses('KhuCongNghiep', 'Admin.Model');

/**
 * KhuCongNghiep Test Case
 *
 */
class KhuCongNghiepTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.khu_cong_nghiep'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->KhuCongNghiep = ClassRegistry::init('Admin.KhuCongNghiep');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->KhuCongNghiep);

		parent::tearDown();
	}

}
